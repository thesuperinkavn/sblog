<!-- Basic datatable -->
<div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">{{$title}}</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
    
        <div class="panel-body">
            <a href="{{ url('post/create') }}">
                <button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-add"></i></b> 
                    Thêm mới
                </button>
            </a>
        </div>
        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div><br />
        @endif
    
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đều</th>
                    <th>Ngày tạo</th>
                    <th>Tác giả</th>
                    <th>Tình trạng</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                <td>{{$post->id}}</td>
                    <td><a href="#">{{$post->name}}</a></td>
                    <td>{{$post->created_at}}</td>
                    <td><span class="label label-success">Author</span></td>
                    <td>{{ ($post->approve==0) ? 'Not approve' : 'approved' }}</td>
                    <td class="text-center">
                        <ul class="list-edit">
                            <li><a href="{{ route('post.edit',$post->id)}}"><i class="icon-compose"></i></a></li>
                            <li><a href="#" id="delete" data-id="<?=$post->id?>"><i class="icon-bin"></i></a></li>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->
    
    
    <script>
    $(document).ready(function(){
        $(document).on('click', '#delete', function(e){
            
            var productId = $(this).data('id');
            SwalDelete(productId);
            e.preventDefault();
        });
    });
    function SwalDelete(productId){
            
            swal({
                title:'Bạn có chắc chắn?',
                text: "Dữ liệu này sẽ bị xóa ngay lập tức!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đúng, Xóa nó!',
                cancelButtonText: 'Bỏ qua',
                showLoaderOnConfirm: true,
                    
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        //console.log(productId);
                        data = {id:productId};
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/post/destroy",
                            type : "POST",
                            dataType : "JSON",
                            data : data
                        })
                        .done(function(response){
                            swal('Đã xóa!', response.message, response.status);
                        location.reload(); // then reload the page.
                        })
                        .fail(function(){
                            swal('Oops...', 'Có lỗi xảy ra !', 'error');
                        });
                    });
                },
                allowOutsideClick: false			  
            });	
            
        }
    </script>