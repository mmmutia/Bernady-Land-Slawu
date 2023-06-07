@extends('layout.master')

@section('title', '- Tim')
@section('isi')
<?php
// require('koneksi.php');
session_start();
error_reporting(0);

$userName = $_SESSION['name'];

?>
<main id="main">
<!-- ======= Our Team Section ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2> <blockquote> Tim Kami </blockquote> </h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Tim</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <style>
          div.member {
            text-align: center;
          }
        </style>
        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/lisa.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/mmmutia?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/mutia-budi-utami-014b16228"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mutia Budi Utami</h4>
                <span>E31210521</span>
                <p>Kalo Orang Lain Bisa Ngoding, Yauda Orang Lain Aja<br>-Muti 2022</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/jennie.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/ellaerwita?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/ela-erwita-sisilia-507289258"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ella Erwita Sisilia</h4>
                <span>E31210385</span>
                <p>Jika Masa Depan Tergantung Pada Mimpimu, Maka Perbanyaklah Tidur!</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/rose.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/ardellaa_?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://instagram.com/ardellaa_?igshid=YTY2NzY3YTc="><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ardella Setya Maharany</h4>
                <span>E31210141</span>
                <p>Singkat, padat, jelas <br>Gak Goodloking <br>Gak di Posting!</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/jisoo.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/ferinaiintan_?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/ferina-intan-3a07a7258"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ferina Intan Nor Alifah</h4>
                <span>E31210351</span>
                <p>Kuliah Lo Ambil Apa? Gue Sih Ambil Hikmahnya Aja wkwkwk</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/psy.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/daffaizath12_?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Daffa I'Zaaz Agung Theola</h4>
                <span>E31210382</span>
                <p>Masa Depan Itu Seperti Sekumpulan Tempe, Tidak Ada Yang Tahu.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
        </main>
    @endsection
