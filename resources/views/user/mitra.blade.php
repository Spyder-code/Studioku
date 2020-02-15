    @extends('layouts/user')
    @section('title','Mitra Studio')

    @section('jumbotron')
    <div class="jumbotron jumbotron-fluid bg-secondary" style="height:800px">
        <div class="container text-center">
            <img src="" width="200px" height="200px" class="mb-2">
            <h1>JADILAH MITRA KAMI</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum impedit dolor reprehenderit fugiat velit exercitationem eligendi molestias dolorem ipsam, eaque perspiciatis? Perferendis sequi animi omnis dignissimos. Eum rem necessitatibus iure.</P>
        <a href="{{url('register')}}" class="btn btn-primary" style="width:200px">Daftar</a>
        <a href="{{url('login')}}" class="btn btn-success d-inline-block" style="width:200px">Masuk</a>
        </div>
    </div>
    @endsection

    @section('container')

    <div class="container-fluid text-center mt-3">
        <div class="row">
            <div class="col mt-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla suscipit omnis dicta, saepe illo reiciendis sint aut vel. Voluptate quaerat consequatur, beatae quibusdam eaque et fuga accusamus officia dolores.</p>
            </div>
            <div class="col">
                <div class="card" style="width:650px; height:200px">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="card" style="width:400px; height:200px">
                    <img src="" alt="">
                    <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam rem deserunt aperiam. Reiciendis alias consequatur maxime sint, fugiat explicabo rerum exercitationem, architecto magnam incidunt, distinctio tenetur saepe doloremque eius.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width:400px; height:200px">
                    <img src="" alt="">
                    <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam rem deserunt aperiam. Reiciendis alias consequatur maxime sint, fugiat explicabo rerum exercitationem, architecto magnam incidunt, distinctio tenetur saepe doloremque eius.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width:400px; height:200px">
                    <img src="" alt="">
                    <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam rem deserunt aperiam. Reiciendis alias consequatur maxime sint, fugiat explicabo rerum exercitationem, architecto magnam incidunt, distinctio tenetur saepe doloremque eius.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
