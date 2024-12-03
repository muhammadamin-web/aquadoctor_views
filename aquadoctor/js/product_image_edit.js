function deleteImage(type, id, imageKey) {
    const url = `/admin/${type}/${id}/image/${imageKey}/delete`;

    fetch(url, {
        method: 'POST', // DELETE methodiga o'zgartiring
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            document.getElementById(`image-container-${imageKey}`).remove();
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error deleting image.');
    });
}

// handleFiles funksiyasi...

function handleFiles(files) {
    let gallery = document.getElementById("gallery");
    const currentImagesCount = gallery.getElementsByClassName("image-container").length;
    const maxImages = 2;

    if (files.length + currentImagesCount > maxImages) {
        alert(`You can only upload a maximum of ${maxImages} images.`);
        return;
    }

    for (let i = 0; i < files.length; i++) {
        let file = files[i];
        if (!file.type.startsWith('image/')) continue;

        let img = document.createElement("img");
        img.classList.add("obj");
        img.file = file;

        let container = document.createElement("div");
        container.classList.add("image-container");
        container.dataset.index = currentImagesCount + i;  // Ma'lumot sifatida indeksni qo'shish

        let btn = document.createElement("button");
        btn.textContent = "Удалить";
        btn.onclick = function() {
            let parentContainer = btn.parentElement;
            let index = parentContainer.dataset.index; // indeksni olish

            parentContainer.remove(); // Agar rasm ma'lumotlar bazasida bo'lmasa
        }

        container.appendChild(img);
        container.appendChild(btn);
        gallery.appendChild(container);

        let reader = new FileReader();
        reader.onload = (function(aImg) {
            return function(e) {
                aImg.src = e.target.result;
            };
        })(img);
        reader.readAsDataURL(file);
    }
}



function removeImage(element) {
    const imageContainer = element.closest('.image-container');
    if (imageContainer) {
        imageContainer.remove();
    }
}

function editImage(type, id, imageKey) {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';
    input.onchange = (e) => {
        const file = e.target.files[0];
        const formData = new FormData();
        formData.append('image', file);

        const url = `/admin/${type}/${id}/image/${imageKey}`;
        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: formData
        }).then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                const imgElement = document.getElementById(`image-container-${imageKey}`).querySelector('img');
                imgElement.src = URL.createObjectURL(file);
            } else {
                alert(data.message);
            }
        })
    };

    input.click();
}
