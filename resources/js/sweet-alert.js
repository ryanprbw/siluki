import Swal from 'sweetalert2';

// sweet-alert.js

document.getElementById('deleteBtn').addEventListener('click', function() {
    Swal.fire({
        title: 'Bujuran?',
        text: 'datanya kada kawa dibulik akan lagi mun dihapus!',
        icon: 'pahatian',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Inggih, hapus ja!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Lakukan operasi penghapusan di sini
            Swal.fire(
                'Deleted!',
                'Data pian sudah tehapus . . . .',
                'Sukses'
            )
        }
    });
});
