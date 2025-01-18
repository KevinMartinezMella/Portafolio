function scrollear(idSeccion) {
    const seccion = document.querySelector(`#${idSeccion}`);
    const posicion = seccion.offsetTop;

    window.scrollTo({
        top: posicion - 50,
        behavior: 'smooth'
      });
}