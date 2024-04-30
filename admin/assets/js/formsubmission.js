const texteditor = ["newseventeditor", "articleeditor", "editarticleck"];

class MyUploadAdapter {
  constructor(loader) {
    // The file loader instance to use during the upload.
    this.loader = loader;
  }

  // Starts the upload process.
  upload() {
    return this.loader.file.then(
      (file) =>
        new Promise((resolve, reject) => {
          this._initRequest();
          this._initListeners(resolve, reject, file);
          this._sendRequest(file);
        })
    );
  }

  // Aborts the upload process.
  abort() {
    if (this.xhr) {
      this.xhr.abort();
    }
  }

  // Initializes the XMLHttpRequest object using the URL passed to the constructor.
  _initRequest() {
    const xhr = (this.xhr = new XMLHttpRequest());

    // Note that your request may look different. It is up to you and your editor
    // integration to choose the right communication channel. This example uses
    // a POST request with JSON as a data structure but your configuration
    // could be different.
    xhr.open("POST", "../functions/ckupload.php", true);
    xhr.responseType = "json";
  }

  // Initializes XMLHttpRequest listeners.
  _initListeners(resolve, reject, file) {
    const xhr = this.xhr;
    const loader = this.loader;
    const genericErrorText = `Couldn't upload file: ${file.name}.`;

    xhr.addEventListener("error", () => reject(genericErrorText));
    xhr.addEventListener("abort", () => reject());
    xhr.addEventListener("load", () => {
      const response = xhr.response;

      // This example assumes the XHR server's "response" object will come with
      // an "error" which has its own "message" that can be passed to reject()
      // in the upload promise.
      //
      // Your integration may handle upload errors in a different way so make sure
      // it is done properly. The reject() function must be called when the upload fails.
      if (!response || response.error) {
        return reject(
          response && response.error ? response.error.message : genericErrorText
        );
      }

      // If the upload is successful, resolve the upload promise with an object containing
      // at least the "default" URL, pointing to the image on the server.
      // This URL will be used to display the image in the content. Learn more in the
      // UploadAdapter#upload documentation.
      console.log(response.url);

      resolve({
        default: response.url,
      });
    });

    // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
    // properties which are used e.g. to display the upload progress bar in the editor
    // user interface.
    if (xhr.upload) {
      xhr.upload.addEventListener("progress", (evt) => {
        if (evt.lengthComputable) {
          loader.uploadTotal = evt.total;
          loader.uploaded = evt.loaded;
        }
      });
    }
  }

  // Prepares the data and sends the request.
  _sendRequest(file) {
    // Prepare the form data.
    const data = new FormData();

    data.append("upload", file);

    // Important note: This is the right place to implement security mechanisms
    // like authentication and CSRF protection. For instance, you can use
    // XMLHttpRequest.setRequestHeader() to set the request headers containing
    // the CSRF token generated earlier by your application.

    // Send the request.
    this.xhr.send(data);
  }
}

function MyCustomUploadAdapterPlugin(editor) {
  editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
    // Configure the URL to the upload script in your back-end here!
    return new MyUploadAdapter(loader);
  };
}

for (var i = 0; i < texteditor.length; i++) {
  ClassicEditor.create(document.getElementById(texteditor[i]), {
    extraPlugins: [MyCustomUploadAdapterPlugin],
  }).catch((err) => {
    console.error(err);
  });
}

// CKEDITOR.ClassicEditor.create(document.getElementById(texteditor[i]), {
//   // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
//   toolbar: {
//     items: [
//       "findAndReplace",
//       "selectAll",
//       "|",
//       "heading",
//       "|",
//       "bold",
//       "italic",
//       "strikethrough",
//       "underline",
//       "code",
//       "subscript",
//       "superscript",
//       "removeFormat",
//       "|",
//       "bulletedList",
//       "numberedList",
//       "todoList",
//       "|",
//       "outdent",
//       "indent",
//       "|",
//       "undo",
//       "redo",
//       "-",
//       "fontSize",
//       "fontFamily",
//       "fontColor",
//       "fontBackgroundColor",
//       "highlight",
//       "|",
//       "alignment",
//       "|",
//       "link",
//       "uploadImage",
//       "blockQuote",
//       "insertTable",
//       "mediaEmbed",
//       "|",
//       "specialCharacters",
//       "horizontalLine",
//       "pageBreak",
//       "|",
//     ],
//     shouldNotGroupWhenFull: true,
//   },
//   // Changing the language of the interface requires loading the language file using the <script> tag.
//   // language: 'es',
//   list: {
//     properties: {
//       styles: true,
//       startIndex: true,
//       reversed: true,
//     },
//   },
//   // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
//   heading: {
//     options: [
//       {
//         model: "paragraph",
//         title: "Paragraph",
//         class: "ck-heading_paragraph",
//       },
//       {
//         model: "heading1",
//         view: "h1",
//         title: "Heading 1",
//         class: "ck-heading_heading1",
//       },
//       {
//         model: "heading2",
//         view: "h2",
//         title: "Heading 2",
//         class: "ck-heading_heading2",
//       },
//       {
//         model: "heading3",
//         view: "h3",
//         title: "Heading 3",
//         class: "ck-heading_heading3",
//       },
//       {
//         model: "heading4",
//         view: "h4",
//         title: "Heading 4",
//         class: "ck-heading_heading4",
//       },
//       {
//         model: "heading5",
//         view: "h5",
//         title: "Heading 5",
//         class: "ck-heading_heading5",
//       },
//       {
//         model: "heading6",
//         view: "h6",
//         title: "Heading 6",
//         class: "ck-heading_heading6",
//       },
//     ],
//   },
//   // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
//   placeholder: "Type your text here...",
//   // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
//   fontFamily: {
//     options: [
//       "default",
//       "Arial, Helvetica, sans-serif",
//       "Courier New, Courier, monospace",
//       "Georgia, serif",
//       "Lucida Sans Unicode, Lucida Grande, sans-serif",
//       "Tahoma, Geneva, sans-serif",
//       "Times New Roman, Times, serif",
//       "Trebuchet MS, Helvetica, sans-serif",
//       "Verdana, Geneva, sans-serif",
//     ],
//     supportAllValues: true,
//   },
//   // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
//   fontSize: {
//     options: [10, 12, 14, "default", 18, 20, 22],
//     supportAllValues: true,
//   },

//   // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
//   link: {
//     decorators: {
//       addTargetToExternalLinks: true,
//       defaultProtocol: "https://",
//       toggleDownloadable: {
//         mode: "manual",
//         label: "Downloadable",
//         attributes: {
//           download: "file",
//         },
//       },
//     },
//   },
//   // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
//   mention: {
//     feeds: [
//       {
//         marker: "@",
//         feed: [
//           "@apple",
//           "@bears",
//           "@brownie",
//           "@cake",
//           "@cake",
//           "@candy",
//           "@canes",
//           "@chocolate",
//           "@cookie",
//           "@cotton",
//           "@cream",
//           "@cupcake",
//           "@danish",
//           "@donut",
//           "@dragée",
//           "@fruitcake",
//           "@gingerbread",
//           "@gummi",
//           "@ice",
//           "@jelly-o",
//           "@liquorice",
//           "@macaroon",
//           "@marzipan",
//           "@oat",
//           "@pie",
//           "@plum",
//           "@pudding",
//           "@sesame",
//           "@snaps",
//           "@soufflé",
//           "@sugar",
//           "@sweet",
//           "@topping",
//           "@wafer",
//         ],
//         minimumCharacters: 1,
//       },
//     ],
//   },
//   // The "superbuild" contains more premium features that require additional configuration, disable them below.
//   // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
//   removePlugins: [
//     // These two are commercial, but you can try them out without registering to a trial.
//     // 'ExportPdf',
//     // 'ExportWord',
//     "AIAssistant",
//     // "CKBox",
//     "CKFinder",
//     "EasyImage",
//     // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
//     // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
//     // Storing images as Base64 is usually a very bad idea.
//     // Replace it on production website with other solutions:
//     // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
//     // 'Base64UploadAdapter',
//     "MultiLevelList",
//     "RealTimeCollaborativeComments",
//     "RealTimeCollaborativeTrackChanges",
//     "RealTimeCollaborativeRevisionHistory",
//     "PresenceList",
//     "Comments",
//     "TrackChanges",
//     "TrackChangesData",
//     "RevisionHistory",
//     "Pagination",
//     "WProofreader",
//     // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
//     // from a local file system (file://) - load this site via HTTP server if you enable MathType.
//     "MathType",
//     // The following features are part of the Productivity Pack and require additional license.
//     "SlashCommand",
//     "Template",
//     "DocumentOutline",
//     "FormatPainter",
//     "TableOfContents",
//     "PasteFromOfficeEnhanced",
//     "CaseChange",
//   ],

//   extraPlugins: [MyCustomUploadAdapterPlugin],
// })
//   .then((editor) => {
//     window.editor = editor;
//   })
//   .catch((error) => {
//     console.error("Oops, something went wrong!");
//     console.error("Please, report the following error");
//     console.error(error);
//   });
// }
