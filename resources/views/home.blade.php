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
          <a class="nav-link" href="#work">works</a>
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
          <div class="profile_container">
            <div class="about_me" id="aboutme">
               <div class="pt-5">
                  <h1><i class="fa-solid fa-address-card"></i> ABOUT ME</h1>
              </div>
    
              <div class="m-5">
              
                  <h3>-school-</h3>
              
                  <div class="txt-show-1 text-groups max-width50">
                          
                          はじめまして。平成5年生まれの25歳エンジニアのなおと(@naoto_7713)と申します。社会人歴（IT業界）4年目です。
                          
                  </div>
                        
                        <div class="txt-hide-1 max-width50">
                          新卒では中小企業のSIerに入社しました。常駐先ではウォータフォール型でデスクトップアプリ開発に携わりました。1年目は開発、2年目は問い合わせ対応と業務効率化のツールを作成です。 
                          ただ、自分で勉強していくうちにもっと開発をしたい。Webに携わりたいと思い転職を決意。
                          web系の自社開発に入社し、現在はフルスタックエンジニアとして働いております。直近でフロントはSPAで実装して、バックエンドはAPI開発です。（2018年8月12日更新）
                          </div>
  
                        <button class="more-1"></button>
             
  
              </div>
      
              <div class="m-5">
              
                  <h3>-work-</h3>
              
                        <div class="txt-show-2 max-width50">
                          はじめまして。平成5年生まれの25歳エンジニアのなおと(@naoto_7713)と申します。社会人歴（IT業界）4年目です。
                        </div>
                        
                        <div class="txt-hide-2 max-width50">
                          新卒では中小企業のSIerに入社しました。常駐先ではウォータフォール型でデスクトップアプリ開発に携わりました。1年目は開発、2年目は問い合わせ対応と業務効率化のツールを作成です。 ただ、自分で勉強していくうちにもっと開発をしたい。Webに携わりたいと思い転職を決意。
                          web系の自社開発に入社し、現在はフルスタックエンジニアとして働いております。直近でフロントはSPAで実装して、バックエンドはAPI開発です。（2018年8月12日更新）
                          </div>
  
                        <button class="more-2"></button>
                    
              </div>
          
              
  
              <div class="m-5">
              
                  <h3>-now-</h3>
              
                        <div class="txt-show-3 max-width50">
                          はじめまして。平成5年生まれの25歳エンジニアのなおと(@naoto_7713)と申します。社会人歴（IT業界）4年目です。
                        </div>
                        
                        <div class="txt-hide-3 max-width50">
                          新卒では中小企業のSIerに入社しました。常駐先ではウォータフォール型でデスクトップアプリ開発に携わりました。1年目は開発、2年目は問い合わせ対応と業務効率化のツールを作成です。 ただ、自分で勉強していくうちにもっと開発をしたい。Webに携わりたいと思い転職を決意。
                          web系の自社開発に入社し、現在はフルスタックエンジニアとして働いております。直近でフロントはSPAで実装して、バックエンドはAPI開発です。（2018年8月12日更新）
                          </div>
  
                        <button class="more-3"></button>
                    
              </div>

              <div class="m-5">
              
                <h3>-hobby-</h3>
            
                      <div class="txt-show-4 max-width50">
                        はじめまして。平成5年生まれの25歳エンジニアのなおと(@naoto_7713)と申します。社会人歴（IT業界）4年目です。
                      </div>
                      
                      <div class="txt-hide-4 max-width50">
                            趣味の写真です。
                           
                      </div>

                      <button class="more-4"></button>
                  
            </div>
              </div>
  
            
  
  
  
          <div class="container_skill" id="skill">
            <div class="m-5">
              <h1><i class="fa-solid fa-user-check"></i> SKILL</h1>
            </div>
             <div class="row m-5">
               <div class="col-6">
                  <ul>
                    <h2><i class="fa-solid fa-desktop mb-2"></i> front-end</h2>
                    <li><i class="fa-brands fa-html5"></i> HTML</li>
                    <li><i class="fa-brands fa-css3-alt"></i> CSS</li>
                  </ul>
               </div>
  
              <div class="col-6">
                  <ul>
                    <h2><i class="fa fa-database mb-2" aria-hidden="true"></i>
                       back-end</h2>
                    <li><i class="fa-brands fa-php"></i> php</li>
                    <li><i class="fa-solid fa-database"></i> SQL</li>
                  </ul>
              </div>
  
              <div class="col-6">
                  <ul>
                    <h2><i class="fa-solid fa-object-group mb-2"></i> design</h2>
                    <li><i class="fa-solid fa-paintbrush"></i> Adobe Illustrator</li>
                  </ul>
              </div>
  
              <div class="col-6">
                <ul>
                  <h2><i class="fa-solid fa-language mb-2"></i> language</h2>
                  <li><i class="fa-solid fa-earth-asia"></i> Japanse</li>
                  <li><i class="fa-solid fa-earth-europe"></i> English</li>
                </ul>
            </div>
            </div>
           </div> 
  
          <div class="works_container" id="works">
            <div class="m-5">
              <h1><i class="fa-solid fa-person-digging"></i> WORKS</h1>
            </div>
              <div class="row m-5">
                <div class="col-6">
                    <ul>
                      <h2>portfolio</h2>
                      <li>
                        <div class="container border">
                          <img src="../img/スクリーンショット 2022-08-28 11.10.23.png" class="img-fluid" alt="">
                         </div>
                      </li>
  
                    </ul>
                      <div class="row">
                            <div class="col-6"><a href="" class="btn btn-border">Git_hub</a></div>
                            <div class="col-6"><a href="" class="btn btn-border">Web_site</a></div>
                      </div>
                </div>
  
                <div class="col-6">
                  <ul>
                    <h2>wish and todo list</h2>
                    <li>
                      <div class="container border">
                        <img src="../img/スクリーンショット 2022-08-31 9.04.50.png" class="img-fluid" alt="">
                       </div>
                    </li>
                  </ul>
                  <div class="row">
                    <div class="col-6"><a href="" class="btn btn-border">Git_hub</a></div>
                    <div class="col-6"><a href="" class="btn btn-border">Web_site</a></div>
              </div>
                </div>
  
                <div class="col-6 mt-5">
                  <ul>
                    <h2>expense system</h2>
                    <li>
                      <div class="container border">
                        <img src="../img/スクリーンショット 2022-08-28 11.19.08.png" class="img-fluid" alt="">
                       </div>
                    </li>
                  </ul>
                  <div class="row">
                    <div class="col-6"><a href="" class="btn btn-border">Git_hub</a></div>
                    <div class="col-6"><a href="" class="btn btn-border">Web_site</a></div>
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
  
      <footer class="footer border">
      
            <p>machiko gondo</p>
        
  
      </footer>
 </div>

</body>
</html>
