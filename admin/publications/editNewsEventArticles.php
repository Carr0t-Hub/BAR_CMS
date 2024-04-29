<?php

include('../functions/functions.php');


if (isset($_POST['id'])) {


    $data = getPublicationById($mysqli, $_POST['id']);
?>
    <form method="POST" action="../process/publication/editArticles.php" enctype="multipart/form-data">
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
    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById('editarticleck'), {
            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
            toolbar: {
                items: [
                    "exportPDF",
                    "exportWord",
                    "|",
                    "findAndReplace",
                    "selectAll",
                    "|",
                    "heading",
                    "|",
                    "bold",
                    "italic",
                    "strikethrough",
                    "underline",
                    "code",
                    "subscript",
                    "superscript",
                    "removeFormat",
                    "|",
                    "bulletedList",
                    "numberedList",
                    "todoList",
                    "|",
                    "outdent",
                    "indent",
                    "|",
                    "undo",
                    "redo",
                    "-",
                    "fontSize",
                    "fontFamily",
                    "fontColor",
                    "fontBackgroundColor",
                    "highlight",
                    "|",
                    "alignment",
                    "|",
                    "link",
                    "uploadImage",
                    "blockQuote",
                    "insertTable",
                    "mediaEmbed",
                    "|",
                    "specialCharacters",
                    "horizontalLine",
                    "pageBreak",
                    "|",
                ],
                shouldNotGroupWhenFull: true,
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true,
                },
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
            heading: {
                options: [{
                        model: "paragraph",
                        title: "Paragraph",
                        class: "ck-heading_paragraph",
                    },
                    {
                        model: "heading1",
                        view: "h1",
                        title: "Heading 1",
                        class: "ck-heading_heading1",
                    },
                    {
                        model: "heading2",
                        view: "h2",
                        title: "Heading 2",
                        class: "ck-heading_heading2",
                    },
                    {
                        model: "heading3",
                        view: "h3",
                        title: "Heading 3",
                        class: "ck-heading_heading3",
                    },
                    {
                        model: "heading4",
                        view: "h4",
                        title: "Heading 4",
                        class: "ck-heading_heading4",
                    },
                    {
                        model: "heading5",
                        view: "h5",
                        title: "Heading 5",
                        class: "ck-heading_heading5",
                    },
                    {
                        model: "heading6",
                        view: "h6",
                        title: "Heading 6",
                        class: "ck-heading_heading6",
                    },
                ],
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: "Welcome to CKEditor 5!",
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    "default",
                    "Arial, Helvetica, sans-serif",
                    "Courier New, Courier, monospace",
                    "Georgia, serif",
                    "Lucida Sans Unicode, Lucida Grande, sans-serif",
                    "Tahoma, Geneva, sans-serif",
                    "Times New Roman, Times, serif",
                    "Trebuchet MS, Helvetica, sans-serif",
                    "Verdana, Geneva, sans-serif",
                ],
                supportAllValues: true,
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [10, 12, 14, "default", 18, 20, 22],
                supportAllValues: true,
            },

            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: "https://",
                    toggleDownloadable: {
                        mode: "manual",
                        label: "Downloadable",
                        attributes: {
                            download: "file",
                        },
                    },
                },
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [{
                    marker: "@",
                    feed: [
                        "@apple",
                        "@bears",
                        "@brownie",
                        "@cake",
                        "@cake",
                        "@candy",
                        "@canes",
                        "@chocolate",
                        "@cookie",
                        "@cotton",
                        "@cream",
                        "@cupcake",
                        "@danish",
                        "@donut",
                        "@dragée",
                        "@fruitcake",
                        "@gingerbread",
                        "@gummi",
                        "@ice",
                        "@jelly-o",
                        "@liquorice",
                        "@macaroon",
                        "@marzipan",
                        "@oat",
                        "@pie",
                        "@plum",
                        "@pudding",
                        "@sesame",
                        "@snaps",
                        "@soufflé",
                        "@sugar",
                        "@sweet",
                        "@topping",
                        "@wafer",
                    ],
                    minimumCharacters: 1,
                }, ],
            },
            // The "superbuild" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                "AIAssistant",
                "CKBox",
                "CKFinder",
                "EasyImage",
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                "MultiLevelList",
                "RealTimeCollaborativeComments",
                "RealTimeCollaborativeTrackChanges",
                "RealTimeCollaborativeRevisionHistory",
                "PresenceList",
                "Comments",
                "TrackChanges",
                "TrackChangesData",
                "RevisionHistory",
                "Pagination",
                "WProofreader",
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                "MathType",
                // The following features are part of the Productivity Pack and require additional license.
                "SlashCommand",
                "Template",
                "DocumentOutline",
                "FormatPainter",
                "TableOfContents",
                "PasteFromOfficeEnhanced",
                "CaseChange",
            ],
        });
    </script>

<?php
}



?>