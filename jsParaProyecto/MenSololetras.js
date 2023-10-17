function MostrarAlerta(){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'por favor, ingrese solo letras',
      showConfirmButton: false,
      timer: 2500
    });
  }