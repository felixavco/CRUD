import Axios from "axios";

const deleteBtn = document.querySelector('.btn-delete');
const alertBox = document.querySelector('.alert');

if (deleteBtn) {
    deleteBtn.addEventListener('click', (e) => {
        if (confirm('Are you sure?')) {
            const post_id = e.target.attributes[0].value;
            const cardElement = e.target.parentElement.parentElement.parentElement;
            Axios
                .delete(`/posts/${post_id}`)
                .then(() => {
                    cardElement.remove();
                })
                .catch((err) => {
                    console.error(err);
                });
        }

    });
}

if(alertBox) {
    setTimeout(() => {
        alertBox.remove();
    }, 2000);
}

