export function toggleClassOnClick(element: HTMLElement, className: string) {
    element.addEventListener('click', (e: PointerEvent) => {
        e.preventDefault();
        element.classList.toggle(className);
    });
}
