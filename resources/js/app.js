import './bootstrap';
import 'flowbite';

document.querySelectorAll(".setMode").forEach(item =>
    item.addEventListener("click", () => {
            if (localStorage.dark == 1) {
                localStorage.dark = 0;
            } else if(localStorage.dark == 0) {
                localStorage.dark = 1;
            }
        })
    )

