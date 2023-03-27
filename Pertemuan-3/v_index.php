<section>
			<h1></h1>
			<p align="justify">Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
			<p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view, dan controller.</p>
			<ol type="a">
				<li>Model </li>
				<p align="justify">Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebaai bagian penanganan yang berhubungan dengan pengolahan atau meipulasi database. Seperti misalnya mangambil data dari database, menginput dan pengolahan database lainnya. Semua instruksi atau fungsi yang berhubung dengan pengolahan database di letakkan di dalam model. sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
				<p align="justify">sebagai catatan, semua model harus disimpan di dalam folder application/models </p>
				<li>View </li>
				<p align="justify">View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser). Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
				<li>Controller </li>
				<p align="justify">Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database(model) di ambil oleh controller dan kemudian controller pula yang menampilkannya ke view. jadi controller lah yang mengolah instruksi</p>
				<p align="justify">Dari penjelasan tentang model view dan contoller di atas dapat di simpulkan bahwa controller sebagai penghubung view dan model. Misalnya pada apilikasi yang menampilkan data dengan menggunkan metode konsep mvc, controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan. Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubugnan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesain tampilan aplikasi, karena back-end delveloper yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.</p>
			</ol>
		</section>
