// resources/js/ckeditor.js
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

document.addEventListener("DOMContentLoaded", () => {
    const editorElements = document.querySelectorAll('textarea[name="description"]');

    editorElements.forEach(editorElement => {
        ClassicEditor
            .create(editorElement)
            .catch(error => {
                console.error(error);
            });
    });
});
