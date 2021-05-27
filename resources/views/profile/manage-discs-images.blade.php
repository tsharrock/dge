<x-app-layout>
    <meta name="_token" content="{{ csrf_token() }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Disc Manager - Add a disc: image upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gray-200 bg-opacity-25">

                    <div class="p-6">
                        <h2>Add a disc</h2>
                        <form method="POST" action="/manage-discs/save">
                            @csrf
                            <div class="grid grid-cols-2">
                                <div class="p-2 relative">
                                    <label for="img_front">Front image</label>
                                    @if (session()->get('front_img'))
                                        <img src="{{ asset('uploads/'. Auth::user()->id .'/'.session()->get('front_img')) }}" width="150" height="150" />
                                        <a href="/manage-discs/clear-cropped/front_img">Clear image</a>
                                    @else
                                        <input type="file" placeholder="" id="img_front" name="img_front" class="image block appearance-none w-full text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onclick="setImage('front')">
                                    @endif
                                </div>

                                <div class="p-2 relative">
                                    <label for="img_front">Back image</label>
                                    @if (session()->get('back_img'))
                                        <img class="mb-3" src="{{ asset('uploads/'. Auth::user()->id .'/'.session()->get('back_img')) }}" width="150" height="150" />
                                        <a href="/manage-discs/clear-cropped/back_img">Clear image</a>
                                    @else
                                        <input type="file" placeholder="" id="img_back" name="img_back" class="image block appearance-none w-full text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onclick="setImage('back')">
                                    @endif
                                </div>

                            </div>
                            <div class="text-right">
                                @if (session()->get('front_img') and session()->get('back_img'))
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('managediscdetails') }}">Add disc info ></a>
                                @endif
                            </div>
                        </form>
                    </div>
                    <style type="text/css">
                        img {
                            display: block;
                            max-width: 100%;
                        }
                        .preview {
                            overflow: hidden;
                            width: 160px;
                            height: 160px;
                            margin: 10px;
                            border: 1px solid red;
                        }
                        .modal-lg{
                            max-width: 1000px !important;
                        }
                    </style>

                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Crop Image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="img-container">
                                        <div class="row">
                                            <div class="col col-md-4">
                                                <img id="image" src="">
                                            </div>
                                            <div class="col col-md-4">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="bg-gray-300 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded" data-dismiss="modal">Cancel</a>
                                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <script>
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var imgSide;
        var cropper;
        $("body").on("change", ".image", function(e){
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });
        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/manage-discs/add-cropped",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data, 'side': imgSide },
                        success: function(data){
                            $modal.modal('hide');
                            location.reload();
                        }
                    });
                }
            });
        })
        function setImage(img) {
            imgSide = img;
        }
    </script>
</x-app-layout>
