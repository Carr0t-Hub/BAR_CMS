const texteditor = ["newseventeditor", "articleeditor", "articleeditor2"];

for (var i = 0; i < texteditor.length; i++) {
  CKEDITOR.replace(texteditor[i], {
    extraPlugins: "image2,uploadimage",
    toolbar: [
      {
        name: "clipboard",
        items: ["Undo", "Redo"],
      },
      {
        name: "styles",
        items: ["styles"],
      },
      {
        name: "basicstyles",
        items: [
          "Bold",
          "Italic",
          "Strike",
          "-",
          "RemoveFormat",
          "align",
          "bidi",
          "paragraph",
        ],
      },
      {
        name: "paragraph",
        items: [
          "NumberedList",
          "BulletedList",
          "-",
          "Outdent",
          "Indent",
          "-",
          "Blockquote",
          "-",
          "JustifyLeft",
          "JustifyCenter",
          "JustifyRight",
          "JustifyBlock",
          "-",
          "BidiLtr",
          "BidiRtl",
          "Language",
        ],
      },
      {
        name: "links",
        items: ["Link", "Unlink"],
      },
      {
        name: "insert",
        items: ["Image", "Table"],
      },
      {
        name: "tools",
        items: ["Maximize", "tools"],
      },
    ],
    // Configure your file manager integration. This example uses CKFinder 3 for PHP.
    filebrowserUploadUrl: "ckeditor/ck_upload.php",
    filebrowserUploadMethod: "form",
    // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
    removeDialogTabs: "image:advanced;link:advanced",
    height: 450,
  });
}
