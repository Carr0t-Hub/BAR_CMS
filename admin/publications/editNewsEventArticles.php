<?php

include('../functions/functions.php');


if (isset($_POST['id'])) {


    $data = getPublicationById($mysqli, $_POST['id']);
?>
    <form method="POST" action="../process/publication/editNewsEventArticles.php" enctype="multipart/form-data">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h3 class="modal-title">Uncategorized Articles</h3>
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ri-close-line"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= $data['title'] ?>">
                                    <label for="title" name="title">Title</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="article_body" class="h4">Article Body</label>
                                <textarea id="editarticleck" class="body" name="body" style="height: 300px;">
                        <?= $data['body'] ?>
                        </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="date_posted" name="datePosted" placeholder="Date Posted" value="<?= $data['datePosted'] ?>">
                                    <label for="date_posted" name="date_posted">Date Posted</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating">
                                    <select name="author" id="author" class="form-control" value="<?= $data['author'] ?>">
                                        <option selected disabled>-- Please Choose --</option>
                                        <option value="John Doe" <?= $data['author'] == "John Doe" ? "selected" : "" ?>>John Doe</option>
                                        <option value="Jane Smith" <?= $data['author'] == "Jane Smith" ? "selected" : "" ?>>Jane Smith</option>
                                    </select>
                                    <label for="title" name="title">Author</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating">
                                    <select name="status" id="post_type" class="form-control">
                                        <option selected disabled>-- Please Choose --</option>
                                        <option value="published" <?= $data['status'] == "published" ? "selected" : "" ?>>Published</option>
                                        <option value="unpublished" <?= $data['status'] == "unpublished" ? "selected" : "" ?>>Unpublished</option>
                                    </select>
                                    <label for="post_type" name="post_type">Post Type</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
                    <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
                </div>
            </div>
        </div>

    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <script>
        // class MyUploadAdapter {
        //     constructor(loader) {
        //         // The file loader instance to use during the upload.
        //         this.loader = loader;
        //     }

        //     // Starts the upload process.
        //     upload() {
        //         return this.loader.file.then(
        //             (file) =>
        //             new Promise((resolve, reject) => {
        //                 this._initRequest();
        //                 this._initListeners(resolve, reject, file);
        //                 this._sendRequest(file);
        //             })
        //         );
        //     }

        //     // Aborts the upload process.
        //     abort() {
        //         if (this.xhr) {
        //             this.xhr.abort();
        //         }
        //     }

        //     // Initializes the XMLHttpRequest object using the URL passed to the constructor.
        //     _initRequest() {
        //         const xhr = (this.xhr = new XMLHttpRequest());

        //         // Note that your request may look different. It is up to you and your editor
        //         // integration to choose the right communication channel. This example uses
        //         // a POST request with JSON as a data structure but your configuration
        //         // could be different.
        //         xhr.open("POST", "../functions/ckupload.php", true);
        //         xhr.responseType = "json";
        //     }

        //     // Initializes XMLHttpRequest listeners.
        //     _initListeners(resolve, reject, file) {
        //         const xhr = this.xhr;
        //         const loader = this.loader;
        //         const genericErrorText = `Couldn't upload file: ${file.name}.`;

        //         xhr.addEventListener("error", () => reject(genericErrorText));
        //         xhr.addEventListener("abort", () => reject());
        //         xhr.addEventListener("load", () => {
        //             const response = xhr.response;

        //             // This example assumes the XHR server's "response" object will come with
        //             // an "error" which has its own "message" that can be passed to reject()
        //             // in the upload promise.
        //             //
        //             // Your integration may handle upload errors in a different way so make sure
        //             // it is done properly. The reject() function must be called when the upload fails.
        //             if (!response || response.error) {
        //                 return reject(
        //                     response && response.error ? response.error.message : genericErrorText
        //                 );
        //             }

        //             // If the upload is successful, resolve the upload promise with an object containing
        //             // at least the "default" URL, pointing to the image on the server.
        //             // This URL will be used to display the image in the content. Learn more in the
        //             // UploadAdapter#upload documentation.
        //             console.log(response.url);

        //             resolve({
        //                 default: response.url,
        //             });
        //         });

        //         // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
        //         // properties which are used e.g. to display the upload progress bar in the editor
        //         // user interface.
        //         if (xhr.upload) {
        //             xhr.upload.addEventListener("progress", (evt) => {
        //                 if (evt.lengthComputable) {
        //                     loader.uploadTotal = evt.total;
        //                     loader.uploaded = evt.loaded;
        //                 }
        //             });
        //         }
        //     }

        //     // Prepares the data and sends the request.
        //     _sendRequest(file) {
        //         // Prepare the form data.
        //         const data = new FormData();

        //         data.append("upload", file);

        //         // Important note: This is the right place to implement security mechanisms
        //         // like authentication and CSRF protection. For instance, you can use
        //         // XMLHttpRequest.setRequestHeader() to set the request headers containing
        //         // the CSRF token generated earlier by your application.

        //         // Send the request.
        //         this.xhr.send(data);
        //     }
        // }

        // function MyCustomUploadAdapterPlugin(editor) {
        //     editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
        //         // Configure the URL to the upload script in your back-end here!
        //         return new MyUploadAdapter(loader);
        //     };
        // }

        ClassicEditor.create(document.getElementById('editarticleck'), {
            // extraPlugins: [MyCustomUploadAdapterPlugin],
        }).catch((err) => {
            console.error(err);
        });
    </script>


<?php
}



?>