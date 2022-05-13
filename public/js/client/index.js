document.addEventListener('DOMContentLoaded', () => {
    const contact = new Contact();

    contact.init();
});

class Contact {
    constructor() {
        this.form = document.querySelector('section.contact form');
    }

    init() {
        this.form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(this.form);
            const data = await getFormData(this.form);

            const username = data.name.trim().split(' ')[0].trim().split('.')[0].trim().split('-')[0].trim();
            Swal.fire({
                title: `Gracias! ${username}`,
                text: 'Tu mensaje ya ha sido enviado para que lo revise personalmente.',
                icon: 'success',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 6000,
                timerProgressBar: true,
            })
        })
    }
}

const getFormData = (form) => {
    return new Promise((resolve, reject) => {
        try {
            const formData = new FormData(form);
            let data = {};

            for (const [key, value] of formData.entries()) {
                data = { ...data, [key]: value };
            }
            resolve(data);
        } catch (error) {
            reject(error);
        }
    })
}
