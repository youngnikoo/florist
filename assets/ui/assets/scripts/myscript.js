const fd = $('.fd').data('fd');
const nm = $('.fd').data('nama');
if(fd){
  if(fd === 'kosong'){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        timer: 3000,
        showConfirmButton: false,
        timerProgressBar: false,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'warning',
        title: 'Data yang diinputkan kosong!'
      })
    }else if(fd === 'upload'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'error',
          title: 'Upload gagal!',
        }
  )}else if(fd === 'gagalhapus'){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: 'error',
            title: 'Data sedang digunakan!',
          }
    )}else if(fd === 'gagalubah'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'error',
          title: 'Data tidak bisa diubah!',
        }
    )}else if(fd === 'ada'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'warning',
          title: 'Data sudah ada!',
        }
    )}else if(fd === 'adauser'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'warning',
          title: 'Username sudah ada, silahkan gunakan yang lain!',
        }
    )}else if(fd === 'pendaftaran'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'success',
          title: 'Registrasi berhasil!',
        }
    )}else if(fd === 'galog'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'error',
          title: 'Username dan password salah!',
        }
    )}else if(fd === 'logged'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'success',
          title: 'Hi, Selamat Datang ' + nm + '!',
        }
    )}else if(fd === 'usr'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'error',
          title: 'Username tidak terdaftar!',
        }
    )}else if(fd === 'ot'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'error',
          title: 'Jawaban verifikasi salah!',
        }
    )}else if(fd === 'xverif'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'warning',
          title: 'Password verifikasi salah!',
        }
    )}else if(fd === 'pubah'){
      const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          timer: 3000,
          showConfirmButton: false,
          timerProgressBar: false,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'success',
          title: 'Password berhasil diubah!',
        }
    )}else{
      const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        timer: 3000,
        showConfirmButton: false,
        timerProgressBar: false,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil ' + fd + '!',
      }
    )}
}

$('.btn-hapus').on('click', function (e) {
    e.preventDefault();

    const url = $(this).attr('href');
    const nama = $(this).attr('nama');
    Swal.fire({
        text: 'Yakin ingin menghapus ' + nama + '?',
        icon: 'question',
        iconPosition: 'top',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus!',
        target: '#custom-target',
        customClass: {
          container: 'position-center'
        },
        toast: true,
        position: 'sticky'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = url;
        }
    }
    )}
);