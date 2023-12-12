document.addEventListener("DOMContentLoaded", function () {
    const fileContainer = document.querySelector(".file-upload-container");
    const fileText = document.querySelector(".file-text");
    const fileInput = document.querySelector("#fileInput");

    fileContainer.addEventListener("dragover", (e) => {
       e.preventDefault();
        fileText.textContent = "Apenas solte o arquivo aqui";
        fileContainer.classList.add("drag-over");
    });

    fileContainer.addEventListener("dragleave", () => {
        fileText.textContent = "Arraste aqui o seu arquivo";
        fileContainer.classList.remove("drag-over");
    });

    fileContainer.addEventListener("drop", (e) => {
        e.preventDefault();
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileText.textContent = files[0].name;

            // Dispatch a custom event with the file data
            fileInput.dispatchEvent(new CustomEvent('file-selected', { detail: { file: files[0] } }));
        }
        fileContainer.classList.remove("drag-over");
    });

    fileInput.addEventListener("change", () => {
        const files = fileInput.files;
        if (files.length > 0) {
            fileText.textContent = files[0].name;

            // Dispatch a custom event with the file data
            fileInput.dispatchEvent(new CustomEvent('file-selected', { detail: { file: files[0] } }));

        }
    });
});
