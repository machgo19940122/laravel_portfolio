<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- css_file -->
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<!-- fontawsome -->
<script src="https://kit.fontawesome.com/0ee9da3264.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
  <!-- フラッシュメッセージCSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- mainjs -->
<script src="{{ asset('/js/main.js') }}"></script>
<!-- font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300">

</head>
<body>
  
  <!-- ナビゲーションバー -->
  <nav class="navbar navbar-light bg-light fixed-top">
    <!-- タイトル -->
    
    <!-- ハンバーガーメニュー -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- ナビゲーションメニュー -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#aboutme">about me </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skill">skill</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#works">works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">contact</a>
        </li>
      </ul>
    </div>
  </nav>
    
    
  <!-- メインイメージ -->
     
      <header id="header">
        
        <div class="scrolldown2"><span>Scroll</span></div>
      </header>

<main>
    <!-- フラッシュメッセージ -->
    <script>
            @if (session('flash_message_1'))
                $(function () {
                               toastr.success('{{ session('flash_message_1') }}'); });
           @endif
       </script>

  <div id="container">

          <div class="pt-5">
                  <h1>it's nice to connect with you! </h1>
                  <h3>-Machiko Gondo-</h3>
          </div>          


          <div class="profile_container">
            <div class="about_me" id="aboutme">
               <div class="pt-5">
                  <h1><i class="fa-solid fa-address-card"></i> ABOUT ME</h1>
              </div>
    
              <div class="m-5">
              
                  <h3>-school-</h3>
              
                  <div class="txt-show-1 text-groups max-width50">
                          はじめまして。権藤真知子です。1994年生まれ、兵庫県出身です。
                  </div>
                        
                  <div class="txt-hide-1 max-width50">
                          高校までは、兵庫県で過ごしました。中学と高校では、バレーボール部に所属していました。大学は、大分県別府市の立命館アジア太平洋大学に進学。アジア太平洋学部で、観光学を中心に学びました。第二外国語として中国語を選択し、３ヶ月上海に語学留学をしました。その後、１年休学しアイルランドへワーキングホリデーに行きました。
                          海外での生活を得て、made in japanの丁寧な仕事で、世界の人の生活を快適に・便利にしたいという気持ちが出てきました。
                   </div>
  
                   <button class="more-1"></button>
             
  
              </div>
      
              <div class="m-5">
              
                  <h3>-work-</h3>
              
                        <div class="txt-show-2 max-width50">
                         新卒で、SPI企業。2社目では、製造業企業に勤めました。
                        </div>
                        
                        <div class="txt-hide-2 max-width50">
                          服を通して人の生活を快適に・便利にしたいという気持ちと、企画〜販売までのモノと情報の流れを１社で学べることから、ユニクロに就職を決めました。店舗でのセルフレジ導入などを得て、システムに興味を持ちました。</br>20代のうちに仕組みを導入する仕事を経験したいと思い、2社目の製造業テクダイヤ株式会社に転職をしました。ERPの導入を行い、ITの知識を深堀したいと思いました。
                      
                        </div>

                        <button class="more-2"></button>
                    
              </div>
          
              
  
              <div class="m-5">
              
                  <h3>-now-</h3>
              
                        <div class="txt-show-3 max-width50">
                          2021年の秋に会社を退職し、プログラミングの勉強を始めました。
                        </div>
                        
                        <div class="txt-hide-3 max-width50">
                          全くの未経験でしたが、新しいことを学ぶことは非常に楽しい時間でした。2022年にはスクールに入校し、個人で進めるカリキュラムだけでなく、チーム開発を経験することもできました。今までの自分の経験と、学んだ知識を掛け算し、自分のキャリアを再スタートさせたいと思っています。
                        </div>
  
                        <button class="more-3"></button>
                    
              </div>

              <div class="m-5" id="skill">
              
                <h3>-hobby-</h3>
            
                      <div class="txt-show-4 max-width50">
                        コロナ禍で、出かける機会も減りました。それでも、毎年冬には必ずスノボーに行きます。
                      
                      </div>
                      
                      <div class="txt-hide-4 max-width50">
                        プリンが好きなのでプリンを目的に喫茶店を巡っています。関東では15ヶ所程巡ったので、関西でも継続中です。</br>
                        コロナ禍で始めたのは、ipadで絵を描いたり、イラレでデザインを作ったりすることです。
                      </div>

                      <button class="more-4"></button>
                  
            </div>
              </div>
  
            
  
  
  
          <div class="container_skill">
            <div class="m-5">
              <h1><i class="fa-solid fa-user-check"></i> SKILL</h1>
            </div>
             <div class="row m-5">
               <div class="col-md-6">
                  <ul>
                    <h2><i class="fa-solid fa-desktop mb-2"></i> front-end</h2>
                    <li><i class="fa-brands fa-html5"></i> HTML</li>
                    <li><i class="fa-brands fa-css3-alt"></i> CSS</li>
                  </ul>
               </div>
  
              <div class="col-md-6">
                  <ul>
                    <h2><i class="fa fa-database mb-2" aria-hidden="true"></i>
                       back-end</h2>
                    <li><i class="fa-brands fa-php"></i> php</li>
                    <li><i class="fa-solid fa-database"></i> SQL</li>
                  </ul>
              </div>
  
              <div class="col-md-6">
                  <ul>
                    <h2><i class="fa-solid fa-object-group mb-2"></i> design</h2>
                    <li><i class="fa-solid fa-paintbrush"></i> Adobe Illustrator</li>
                  </ul>
              </div>
  
              <div class="col-md-6">
                <ul>
                  <h2><i class="fa-solid fa-language mb-2"></i> language</h2>
                  <li><i class="fa-solid fa-earth-asia"></i> Japanse</li>
                  <li><i class="fa-solid fa-earth-europe"></i> English</li>
                </ul>
            </div>
            </div>
           </div> 
  
          <div class="container" id="works">
                <div class="m-5">
                  <h1><i class="fa-solid fa-person-digging"></i> WORKS</h1>
                </div>

             <div class="row">

                <div class="col-md-6 mt-3">
                    <ul>
                      <h2>portfolio</h2>
                     
                  
                      <li>
                        <div class="container-sm border">
                        <img src="{{ asset('storage/スクリーンショット 2022-09-14 11.41.20.png') }}"" class="img-fluid" alt="">
                         </div>
                      </li>

                      <li><h6 class="mt-3">少しでも自分のことを知ってもらう機会になれば嬉しいです。</h6></li>
  
                    </ul>
                      <div class="row">
                            <div class="col-6"><a href="https://github.com/machgo19940122/laravel_portfolio" class="btn btn-border p-2" target="_blank">Git_hub</a></div>
                            <div class="col-6"><a href="https://portfolio-machikogondo.herokuapp.com/" class="btn btn-border p-2" target="_blank">Web_site</a></div>
                      </div>
                </div>
  
                <div class="col-md-6 mt-3">
                   <ul>
                     <h2>Expense  Management System</h2>

                     <li>
                        <div class="container-sm border">
                            <img src="{{ asset('/storage/スクリーンショット 2022-09-14 11.45.06.png') }}"" class="img-fluid" alt="">
                        </div>
                    </li>

                    <li><h6 class="mt-3">スクールの受講生でチームを組み、アイデアを出すところからテストまで実施しました。企業で使用する経費申請・承認ができる管理アプリです。パソコンで使用することを想定しています。</h6></li>
                  </ul>

                  <div class="row">
                    <div class="col-6"><a href="https://github.com/machgo19940122/expense-application" class="btn btn-border p-2" target="_blank">Git_hub</a></div>
                    <div class="col-6"><a href="https://expense-controll-application.herokuapp.com/login" class="btn btn-border p-2" target="_blank">Web_site</a>
                  </div>

            </div>

            </div>
  
                <div class="col-md-6 mt-3">
                  <ul>
                    <h2>wish and todo</h2>

                    <li>
                      <div class="container-sm border">
                      <img src="{{ asset('/storage/スクリーンショット 2022-09-14 11.46.28.png') }}" class="img-fluid" alt="">
                       </div>
                    </li>

                    <li><h6 class="mt-3">自主制作をしたアプリです。日常的にやること（TO DO）と、非日常的にやりたいこと（WISH)を一緒のアプリで管理して、日常のモチベーションやワクワクが増えたらいいなと思いアプリを作成しました。
                    </h6></li>
                  </ul>
                  <div class="row">
                    <div class="col-6"><a href="https://github.com/machgo19940122/wish_todolist" class="btn btn-border p-2" target="_blank">Git_hub</a></div>
                    <div class="col-6"><a href="http://wish-and-todo.herokuapp.com/login" class="btn btn-border p-2" target="_blank">Web_site</a></div>
              </div>
  
                  
                </div>
  
              </div>
           
             </div> 
        
              
          </div>
  
          <section id="contact">
  
            <div class="m-5">
              <h1><i class="fa-solid fa-children"></i>CONTACT</h1>
            </div>
        
  
            
            <!-- Left contact page --> 
              
              <form id="contact-form" class="form-horizontal m-auto"  method="POST" action="{{ route('postcontact') }}">
                 
                <div class="mb-3 form-group">
                  <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                </div>
              
          
                <div class="mb-3 form-group">
                    <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                </div>
          
                <div class="mb-3 form-group">
                    <textarea class="form-control" rows="10" placeholder="MESSAGE" name="comment" required></textarea>
                </div>
  
                
                <button class="btn btn-primary send-button mb-5" id="submit" type="submit" value="SEND">
                    <i class="fa fa-paper-plane"></i><span class="send-text"></span>
                </button>
                {{ csrf_field() }}
                
              </form>
            </div>
            
          </section>  
          
  
        </div>
      </main>
  
      <footer class="footer border pt-5 text-secondary">
      
            <h6>thanks...</h6>
        
  
      </footer>
 </div>

</body>
</html>
