@include('backend.includes.header');

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add New products with details here</li>
                        </ol>
                        
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card p-3">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-group mb-3">
                                        <label for="">Product Name</lable>
                                        <input name="name" type="text" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Product Category</lable>
                                        <select name="category_name" class="form-control">
                                            <option value="">--Select Category--</option>
                                            <option value="TV">TV</option>
                                            <option value="AC">AC</option>
                                            <option value="MOBILE">MOBILE</option>
                                            <option value="CAMERA">CAMERA</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Product Brand</lable>
                                        <select name="brand_name" class="form-control">
                                            <option value="">--Select Brand--</option>
                                            <option value="OPPO">OPPO</option>
                                            <option value="WALTON">WALTON</option>
                                            <option value="I-PHONE">I-PHONE</option>
                                            <option value="SAMSUNG">SAMSUNG</option>

                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Product Description</lable>
                                        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Product Image</lable>
                                        <input name="image" class="form-control" type="file"/>
                                    </div>

                                    <div class="form-group mb-3">
                                       <input name="" class="btn btn-info" type="submit"value="Save Product"/>
                                    </div>

                                </div>
                            </div>

                        </div>
</form>
                        
                    </div>
                </div>

@include('backend.includes.footer');