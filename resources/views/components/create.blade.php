<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="row">
                  <form action="" method="post">
                        <div class="col-xl-12">
                            <div class="dz-default dlab-message upload-img mb-3">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="">
                                    </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title <span class="text-danger">*</span></label>
                            <select name="title" class="form-control" id="title">
                                <option value=""></option>
                                <x-title-options />
                            </select>
                        </div>

                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fullname <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Gender <span class="text-danger">*</span></label>
                            <select name="title" class="form-control" id="title">
                                <option value=""></option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Designation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="designation" name="designation" placeholder="">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Organisation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="organization" name="organization" placeholder="">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Bio <span class="text-danger">*</span></label>
                            <textarea name="bio" id="bio" cols="70" rows="10"></textarea>
                        </div>
                  </form>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>
