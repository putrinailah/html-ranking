<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <title>RANKING XI RPL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light bg-primary text-white">
    <h2>DAFTAR NILAI</h2>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>
        </header>
        <br>
        <main class="container">
            <div class="row">
                <div class="container col-md-4">
                    <h3>input data</h3>
                
                    <hr>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input id="text" type="name" name="nama" class="form-control">
                        </div> 
                        <div class="mb-3">
                            <label for="nama">Nilai</label>
                            <input id="nilai" type="number" name="nama" class="form-control">
                        </div>

                        <div class="d-grid">
                        <button class="btn btn-primary btn-block" type="submit">kirim</button>
                        </div>
                        
                    </form>
                </div>

                <div class="col-md-8">
                    <h3>Daftar Nilai</h3>
                    <hr>
                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>NILAI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $key => $d): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['score'] ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Achmad Fauzan</td>
                            <td>76</td>
                        </tr>
                        <tr style="color:red ;">
                            <td>3</td>
                            <td>Adystya Anandita</td>
                            <td>72</td>
                        </tr>
                        <tr style="color: red;">
                            <td>4</td>
                            <td>Aisyah Salsabila</td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Aldo Ahmad Hirzi</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ali Zainal Abidin Shahab</td>
                            <td>72</td>
                        </tr>
                        <tr style="color: red;">
                            <td>7</td>
                            <td>Allya Bunga Lestari</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Ananda David Saputra</td>
                            <td>78</td>
                        </tr>
                        <tr style="color: red;">
                            <td>9</td>
                            <td>Anis Rahmawati</td>
                            <td>74</td>
                        </tr>
                        <tr style="color: red;">
                            <td>10</td>
                            <td>Atifah Fadhila Zayani</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Cakra Wibowo</td>
                            <td>77</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Dana Sufianto</td>
                            <td>71</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Davin Aji Wibowo</td>
                            <td>82</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Esa Tegar Putra Utama</td>
                            <td>80</td>
                        </tr>
                        <tr style="color: red;">
                            <td>15</td>
                            <td>Fathimah</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Firman Ramadhan</td>
                            <td>71</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Handhika Tia Saputro</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Kevin Adisurya Nugraha</td>
                            <td>77</td>
                        </tr>
                        <tr style="color:red ;">
                            <td>19</td>
                            <td>Latifa</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Mohammad Fajar Ilham </td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Mohammad Ferdiansyah</td>
                            <td>77</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Muhamad Wildan Ichsan</td>
                            <td>73</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Muhammad Fadlan Kamil</td>
                            <td>78</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Muhammad Faqi Nugroho Azani</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Muhammad Rizqi Ramadhan</td>
                            <td>81</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Muhammad Satrio Wibisono</td>
                            <td>77</td>
                        </tr>
                        <tr style="color: red;">
                            <td>27</td>
                            <td>Putri Nabila</td>
                            <td>77</td>
                        </tr>
                        <tr style="color: red;">
                            <td>28</td>
                            <td>Putri Nailah Azzahra</td>
                            <td>77</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Rafif Dwi Prayata</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Reynaldo Lamhot Silalahi</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Ridwan Muhamad Husein</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Salman Zulkarnain</td>
                            <td>79</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Wisnu Sya'ban Triananda</td>
                            <td>71</td>
                        </tr>
                        <tr style="color: red;">
                            <td>34</td>
                            <td>Zahra Alilatul Bariza</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Zaid Arrazy</td>
                            <td>75</td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    </table>
                </div>
            </div>
            <footer class="bg-primary text-white text-center    ">
                <p>created bye nainai aha</p>
            </footer>
        </main>   
        
    </body>
</html>