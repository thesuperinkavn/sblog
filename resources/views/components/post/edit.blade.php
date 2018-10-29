<!-- WYSIHTML5 basic -->
<div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Sửa bài viết</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
    
        <div class="panel-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('post.update', $post->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2 col-xs-12">Tiêu đề bài viết</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" id="post-name" name="name" value="{{ $post->name }}" class="form-control">
                    </div>
                </div>
    
                <div class="form-group">
                    <label class="control-label col-lg-2 col-xs-12">Mô tả</label>
                    <div class="col-lg-10 col-xs-12">
                        <textarea rows="3" cols="3" class="form-control" name="description" placeholder="Mô tả bài viết">{{$post->description}}
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-xs-12">
                        <textarea class="my-editor" id="editor" name="content">{{$post->content}}</textarea>
                    </div>
                </div>
    
                <div class="text-right">
                    <button type="reset" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /WYSIHTML5 basic -->
    
    <!-- Init Trumbowyg -->
    <script>
    
            // Customize your emoji images base URL
            emojify.setConfig({
                img_dir : '//cdnjs.cloudflare.com/ajax/libs/emojify.js/1.1.0/images/basic/',
            });
            // Doing this in a loaded JS file is better, I put this here for simplicity
            $('#editor')
                .trumbowyg({
                    btnsDef: {
                        // Create a new dropdown
                        image: {
                            dropdown: ['insertImage', 'upload'],
                            ico: 'insertImage'
                        }
                    },
                    // Redefine the button pane
                    btns: [
                        ['viewHTML'],
                        ['formatting'],
                        ['strong', 'em', 'del'],
                        ['superscript', 'subscript'],
                        ['link'],
                        ['image'], // Our fresh created dropdown
                        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                        ['unorderedList', 'orderedList'],
                        ['horizontalRule'],
                        ['removeformat'],
                        ['noembed'],
                        ['emoji'],
                        ['fullscreen']
                        
                    ],
                    plugins: {
                        // Add imagur parameters to upload plugin for demo purposes
                        upload: {
                            serverPath: 'https://api.imgur.com/3/image',
                            fileFieldName: 'image',
                            headers: {
                                'Authorization': 'Client-ID d45d6aba4daab5b'
                            },
                            urlPropertyName: 'data.link'
                        }
                    }
                });
                emojify.run();
        
                // Will transform an :emoji: to img tag at each input
                $('.trumbowyg-editor').on('input propertychange', function() {
                    emojify.run();
                });
               
        </script>