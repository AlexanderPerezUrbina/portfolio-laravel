document.addEventListener('DOMContentLoaded', () => {
    const nav = new Nav();
    const contact = new Contact();

    nav.init();
    contact.init();
});

class Contact {
    constructor() {
        this.form = document.querySelector('section.contact form');
    }

    init() {
        if (this.form) {
            this.form.addEventListener('submit', async (event) => {
                event.preventDefault();

                const data = await getFormData(this.form);
                const csrfToken = this.form.querySelector('input[name="_token"]').value;

                try {
                    const response = await fetch("/contact", {
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-Token": csrfToken
                        },
                        method: "post",
                        credentials: "same-origin",
                        body: JSON.stringify({
                            ...data
                        })
                    })

                    if (response.status === 200) {
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
                    } else {
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Algo salió mal, por favor intenta nuevamente.',
                            icon: 'error',
                            showConfirmButton: false,
                            showCloseButton: true,
                            timer: 6000,
                            timerProgressBar: true,
                        })
                    }
                    grecaptcha.reset(document.querySelector('#g-recaptcha-client-contact'));
                } catch (error) {
                    console.log(error);
                    grecaptcha.reset(document.querySelector('#g-recaptcha-client-contact'));
                }
            })
        }
    }
}

class Nav {
    constructor() {
        this.navTopBar = document.querySelector('nav.topbar');
        this.navSideBar = document.querySelector('nav.sidebar');
        this.navOverlay = document.querySelector('.nav-overlay');
    }

    init() {
        if (this.navTopBar && this.navSideBar) {
            const btnToggleSidebar = this.navTopBar.querySelector('button.sidebar-btn');

            btnToggleSidebar.addEventListener('click', () => {
                this.navSideBar.classList.toggle('active');
                btnToggleSidebar.classList.toggle('active');
            });

            if (this.navOverlay) {
                this.navOverlay.addEventListener('click', () => {
                    this.navSideBar.classList.remove('active');
                    btnToggleSidebar.classList.remove('active');
                });
            }
        }

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
