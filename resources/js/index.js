import Axios from "axios";

const deleteBtn = document.querySelector('.btn-delete');

if (deleteBtn) {
    deleteBtn.addEventListener('click', (e) => {
        if (confirm('Are you sure?')) {
            const post_id = e.target.attributes[0].value;
            const cardElement = e.target.parentElement.parentElement.parentElement;
            Axios
                .delete(`/posts/${post_id}`)
                .then((res) => {
                    if (res.status === 200) {
                        cardElement.remove();
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        }

    });
}

