{include file="header.tpl"}

 <div class="container mt-5">
        <h1 class="text-center mb-4">Upload a File</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="post" action="/process-upload" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="file" class="form-label">Choose File</label>
                                <input type="file" class="form-control" id="file" name="file" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{include file="footer.tpl"}