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
