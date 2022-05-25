<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- style -->
    <link rel="stylesheet" href="css/app.css" />

    <title>Pai Abroad</title>
  </head>
  <body>
    <!-- header -->
    <header>
      <!-- Navbar -->
      <nav
        class="navbar navbar-expand-lg shadow-md py-2 bg-my-orange relative flex items-center w-full justify-between"
      >
        <div class="px-6 w-full flex flex-wrap pc:items-center justify-between">
          <div
            class="navbar-collapse collapse grow items-center"
            id="navbarSupportedContentY"
          >
            <ul
              class="navbar-nav mr-auto pc:flex pc:flex-row pc:justify-between"
            >
              <div>
                <li class="nav-item">
                  <a
                    class="nav-link block pr-2 pc:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                    href="{{ url('/paiabroad') }}"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                  >
                    <img
                      src="{{ asset('images/lp/header-logo.png') }}"
                      alt=""
                      srcset=""
                      class="max-w-[70%] h-auto object-cover"
                    />
                  </a>
                </li>
              </div>

              <div id="menu" class="hidden pc:block pc:flex gap-2 items-center text-[16px]">
                <li class="nav-item">
                  <a
                    class="nav-link block pr-2 pc:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                    href="#!"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    >ホームステイ留学とは</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link block pr-2 pc:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                    href="#!"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    >費用・期間</a
                  >
                </li>
                <li class="nav-item mb-2 pc:mb-0">
                  <a
                    class="nav-link block pr-2 pc:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                    href="#!"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    >参加の流れ</a
                  >
                </li>
                <li class="nav-item mb-2 pc:mb-0">
                  <a
                    class="nav-link block pr-2 pc:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                    href="#!"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    >参加者の声</a
                  >
                </li>
                <li class="nav-item mb-2 pc:mb-0">
                  <a
                    class="nav-link block pr-2 pc:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                    href="#!"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    >ホストになる</a
                  >
                </li>
                <li class="nav-item mb-2 pc:mb-0 text-center">
                  <a
                    class="nav-link block pr-2 pc:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out bg-my-red py-2 px-4 rounded-md max-w-[500px]"
                    href="{{ route('home.index') }}"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    >留学先を探す</a
                  >
                </li>
              </div>
            </ul>
          </div>
          <div class="mt-5">
            <button id="menu_btn"
              class="navbar-toggler border-0 py-3 pc:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContentY"
              aria-controls="navbarSupportedContentY"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                class="w-6"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <path
                  fill="currentColor"
                  d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                ></path>
              </svg>
            </button>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Background image -->
      <div
        class="relative overflow-hidden bg-no-repeat bg-cover"
        style="
          background-position: 50%;
          background-image: url('../images/lp/header-image.jpg');
          height: 500px;
        "
      >
        <div
          class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
          style="background-color: rgba(0, 0, 0, 0.2);"
        >
          <div class="flex justify-center items-center h-full">
            <div class="text-center px-6 tab:px-12">
              <h1 class="text-4xl tab:text-5xl font-bold mt-0 mb-8">
                グローバル時代の<br class="block pc:hidden">新しい留学
              </h1>
              <h2 class="text-3xl tab:text-4xl font-bold mb-8">PAI ABROAD</h2>
              <h3 class="text-2xl tab:text-3xl font-bold mb-8">〜INDIA〜</h3>
              <h3
                class="text-2xl tab:text-3xl font-bold mb-8 text-white border-t border-b border-gray-800 py-4"
              >
                ホームステイ×留学
              </h3>
              <button
                type="button"
                class="inline-block px-6 py-2.5 bg-my-red text-white font-medium rounded-md leading-tight uppercase rounded-md hover:opacity-80"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
              >
                ホームステイ留学 詳細
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->
    </header>

    <!-- main -->
    <main>
      <!-- back to top button -->
      <div id="page_top" class="fixed right-4 bottom-4 bg-my-orange text-white font-bold text-2xl font-bold py-2 px-3 rounded-full z-10 cursor-pointer">&uarr;</div>
      <!-- worry -->
      <section>
        <p class="bg-my-orange text-2xl tab:text-3xl font-bold text-center py-5 relative">
          留学にこんな悩みないですか？
        </p>

        <ul class="text-2xl tab:text-3xl my-14 w-[90%] pc:w-[50%] mx-auto tab:text-center">
          <li>英語以外のことをたくさん学びたい</li>
          <li class="mt-2">その国に溶け込みたい</li>
          <li class="mt-2">格安で留学したい</li>
          <li class="mt-2">素敵な家に住みたい</li>
        </ul>
      </section>

      <!-- cta -->
      <p class="bg-my-blue text-2xl pc:text-3xl text-center py-5 text-white">
        <span>ホームステイ留学してみる</span>
        <a href="{{ route('home.index') }}" target="_blank"
          type="button"
          class="inline-block text-lg px-6 py-2.5 bg-my-red text-white font-medium rounded-md leading-tight uppercase rounded-m hover:opacity-80 mt-2 tab:mt-0 tab:ml-5 max-w-[500px] cursor-pointer"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
        >
          こちらをクリック
        </a>
      </p>

      <!-- about -->
      <section id="about"
        class="relative overflow-hidden bg-no-repeat bg-cover">
        <div
          class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
          style="background-color: rgba(0, 0, 0, 0.2);"
        >
          <div
            class="absolute right-0 left-0 mx-auto top-[50%] translate-y-[-50%] w-[90%] text-center"
          >
            <h2 class="text-3xl tab:text-4xl font-bold mb-8">
              ホームステイ留学とは？？
            </h2>
            <p class="text-xl tab:text-2xl font-bold mb-8 text-white">
              ホームステイ留学はグローバル時代の新しい留学です
            </p>
            <div class="block pc:flex justify-between">
              <div class="relative bg-white rounded-sm pc:w-[30%] mb-2 pc:mb-0 p-4">
                <span
                  class="bg-my-blue text-white py-1 px-2 absolute top-[-5%] left-[-5%]"
                  >特徴1</span
                >
                <h3
                  class="text-2xl tab:text-3xl font-bold mb-8 border-b border-gray-800 py-4"
                >
                  現地の生活に溶け込む
                </h3>
                <p>
                  インド人と共同生活することにより、一般的な留学より深く現地の生活に触れることができます。
                  日本の環境から離れることにより、レベルの高いグローバル人材に育成します。
                </p>
              </div>
              <div class="relative bg-white rounded-sm pc:w-[30%] p-4 mb-2 pc:mb-0">
                <span
                  class="bg-my-blue text-white py-1 px-2 absolute top-[-5%] left-[-5%]"
                  >特徴2</span
                >
                <h3
                  class="text-2xl tab:text-3xl font-bold mb-8 border-b border-gray-800 py-4"
                >
                  英語＋専門知識を学ぶ
                </h3>
                <p>
                  ホームステイすることにより英語に触れる機会を多くし生活の中で英語スキルを高めていくのがこの留学の特徴です。
                  さらに自分の学びたいスキルを決定し英語＋専門スキルを学ぶことができます。
                </p>
              </div>
              <div class="relative bg-white rounded-sm pc:w-[30%] p-4">
                <span
                  class="bg-my-blue text-white py-1 px-2 absolute top-[-5%] left-[-5%]"
                  >特徴3</span
                >
                <h3
                  class="text-2xl tab:text-3xl font-bold mb-8 border-b border-gray-800 py-4"
                >
                  素敵な家で海外生活
                </h3>
                <p>
                  一般的な留学では寮生活が基本ですが、HOMEABROADでは丘の上の家、海の見える家など普段生活することない環境の滞在先のみを提供しています。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- merit -->
      <section class="py-10">
        <h2 class="text-3xl tab:text-4xl font-bold mb-8 text-center">
          ホームステイ留学のメリット
        </h2>
        <table class="table-fixed w-[90%] pc:w-[80%] text-[16px] mx-auto border-collapse">
          <thead>
            <tr class="font-bold">
              <th></th>
              <th>学習</th>
              <th>費用(3ヶ月)</th>
              <th>住居</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-[#F1F691]">
              <th class="font-bold">ホームステイ留学</th>
              <td>英語＋専門スキル</td>
              <td>30万円〜</td>
              <td>ホームステイ</td>
            </tr>
            <tr>
              <th class="font-bold">語学留学</th>
              <td>語学のみ</td>
              <td>100万円〜</td>
              <td>寮</td>
            </tr>
            <tr>
              <th class="font-bold">ワーキングホリデー</th>
              <td>英語＋バイト</td>
              <td>50万円〜</td>
              <td>家賃</td>
            </tr>
          </tbody>
        </table>
      </section>

      <!-- cta -->
      <p class="bg-my-blue text-2xl pc::text-3xl text-center py-5 text-white">
        <span>ホームステイ留学してみる</span>
        <a href="{{ route('home.index') }}" target="_blank"
          type="button"
          class="inline-block text-lg px-6 py-2.5 bg-my-red text-white font-medium rounded-md leading-tight uppercase rounded-m hover:opacity-80 mt-2 tab:mt-0 tab:ml-5 max-w-[500px] cursor-pointer"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
        >
          こちらをクリック
        </a>
      </p>

      <!-- program -->
      <section id="program"
        class="relative overflow-hidden bg-no-repeat bg-cover"
      >
        <div
          class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
          style="background-color: rgba(0, 0, 0, 0.2);"
        >
          <div
            class="absolute right-0 left-0 mx-auto top-[50%] translate-y-[-50%] w-[90%] text-center"
          >
            <h2 class="text-3xl tab:text-4xl font-bold mb-8">
              ホストが提供する<br class="tab:hidden">プログラムは様々です
            </h2>
            <p class="text-xl tab:text-2xl font-bold mb-8 text-white">
              自分の希望にあった体験を探せます
            </p>
            <h3 class="text-2xl tab:text-3xl font-bold mb-8">
              ホームステイ留学の一例
            </h3>
            <div class="pc:flex justify-between">
              <div class="bg-white rounded-sm w-[90%] pc:w-[30%] mb-2 pc:mb-0 mx-auto">
                <div>
                  <img
                    src="{{ asset('images/lp/program-image1.jpeg') }}"
                    alt="programing"
                    srcset=""
                    class="w-full h-[205px]"
                  />
                </div>
                <h3 class="bg-my-orange text-2xl tab:text-3xl font-bold py-4">
                  プログラミング
                </h3>
                <p class="py-4 px-2">
                  インドでレベルが高く開発経験のあるインド人講師によるマンツーマンレッスンを行います。
                  自宅にはWifi環境、モニター、パソコンがあり自由に利用できます。
                </p>
              </div>
              <div class="bg-white rounded-sm w-[90%] pc:w-[30%] mb-2 pc:mb-0 mx-auto">
                <div>
                  <img
                    src="{{ asset('images/lp/program-image2.jpeg') }}"
                    alt="curry training"
                    srcset=""
                    class="w-full h-[205px]"
                  />
                </div>
                <h3 class="bg-my-orange text-2xl tab:text-3xl font-bold py-4">
                  カレー修行
                </h3>
                <p class="py-4 px-2">
                  スパイスの栽培から、調合、調理まで、料理教室では学べない深いところまで学びます。
                  日本でインドカレー専門店を始めようとする方にオススメのコースです。
                </p>
              </div>
              <div class="bg-white rounded-sm w-[90%] pc:w-[30%] mx-auto">
                <div>
                  <img
                    src="{{ asset('images/lp/program-image3.jpeg') }}"
                    alt="yoga"
                    srcset=""
                    class="w-full h-[205px]"
                  />
                </div>
                <h3 class="bg-my-orange text-2xl tab:text-3xl font-bold py-4">
                  ヨガ留学
                </h3>
                <p class="py-4 px-2">
                  ヨガの聖地インドにて、現役ヨガ講師の指導の下ヨガインストラクターになるための技術やヨガの歴史を学ぶことができます。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- flow -->
      <section class="my-10">
        <h2 class="text-3xl tab:text-4xl font-bold mb-8 text-center">
          参加の流れ
        </h2>
        <p class="text-xl tab:text-2xl font-bold mb-8 text-center">
          ヒアリングから帰国までサポート致します
        </p>
        <div class="w-[90%] pc:w-[60%] mx-auto">
          <div class="mt-5 relative bg-my-orange text-center pc:rounded-full py-2">
            <span
              class="bg-my-blue text-white rounded-full absolute top-0 left-[-3%] w-[92px] h-[92px] inline-block pc:flex justify-center items-center hidden"
              >STEP1</span
            >
            <span
              class="bg-my-blue text-white flex justify-center items-center block pc:hidden"
              >STEP1</span
            >
            <h3 class="text-2xl tab:text-3xl font-bold py-2">
              お問い合わせフォームより申し込み
            </h3>
            <p>
              お問い合わせフォームより必要事項をご記入ください
            </p>
          </div>
          <div class="mt-5 relative bg-my-orange text-center pc:rounded-full py-2">
            <span
              class="bg-my-blue text-white rounded-full absolute top-0 left-[-3%] w-[92px] h-[92px] inline-block pc:flex justify-center items-center hidden"
              >STEP2</span
            >
                        <span
              class="bg-my-blue text-white flex justify-center items-center block pc:hidden"
              >STEP2</span
            >
            <h3 class="text-2xl tab:text-3xl font-bold py-2">
              Skypeにてカウンセリング
            </h3>
            <p>
              Skypeにてプランの決定やホストの紹介を致します。
            </p>
          </div>
          <div class="mt-5 relative bg-my-orange text-center pc:rounded-full py-2">
            <span
              class="bg-my-blue text-white rounded-full absolute top-0 left-[-3%] w-[92px] h-[92px] inline-block pc:flex justify-center items-center hidden"
              >STEP3</span
            >
                        <span
              class="bg-my-blue text-white flex justify-center items-center block pc:hidden"
              >STEP3</span
            >

            <h3 class="text-2xl tab:text-3xl font-bold py-2">
              留学先の紹介
            </h3>
            <p>
              留学先の詳細、お見積もり、注意事項等を書類で作成いたします。
            </p>
          </div>
          <div class="mt-5 relative bg-my-orange text-center pc:rounded-full py-2">
            <span
              class="bg-my-blue text-white rounded-full absolute top-0 left-[-3%] w-[92px] h-[92px] inline-block pc:flex justify-center items-center hidden"
              >STEP4</span
            >
                        <span
              class="bg-my-blue text-white flex justify-center items-center block pc:hidden"
              >STEP4</span
            >
            <h3 class="text-2xl tab:text-3xl font-bold py-2">
              ホストと面談
            </h3>
            <p>
              Skypeにてホストと面談し授業の内容を明確にします。
            </p>
          </div>
          <div class="mt-5 relative bg-my-orange text-center pc:rounded-full py-2">
            <span
              class="bg-my-blue text-white rounded-full absolute top-0 left-[-3%] w-[92px] h-[92px] inline-block pc:flex justify-center items-center hidden"
              >STEP5</span
            >
                        <span
              class="bg-my-blue text-white flex justify-center items-center block pc:hidden"
              >STEP5</span
            >
            <h3 class="text-2xl tab:text-3xl font-bold py-2">
              インドへ渡航
            </h3>
            <p>
              インドへ渡航しホームステイ留学のスタートです！
            </p>
          </div>
        </div>
      </section>

      <!-- cta -->
      <p class="bg-my-blue text-2xl pc:text-3xl text-center py-5 text-white">
        <span>ホームステイ留学してみる</span>
        <a href="{{ route('home.index') }}" target="_blank"
          type="button"
          class="inline-block text-lg px-6 py-2.5 bg-my-red text-white font-medium rounded-md leading-tight uppercase rounded-m hover:opacity-80 mt-2 tab:mt-0 tab:ml-5 max-w-[500px] cursor-pointer"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
        >
          こちらをクリック
        </a>
      </p>

      <!-- voice -->
      <section id="voice"
        class="relative overflow-hidden bg-no-repeat bg-cover">
        <div
          class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
          style="background-color: rgba(0, 0, 0, 0.2);"
        >
          <div
            class="absolute right-0 left-0 mx-auto top-[50%] translate-y-[-50%] w-[90%] text-center"
          >
            <h2 class="text-3xl tab:text-4xl font-bold mb-8">
              参加者の声
            </h2>
            <p class="text-xl tab:text-2xl font-bold mb-8 text-white">
              学校ではないので体験は様々<br class="block tab:hidden">唯一無二の貴重な体験談です
            </p>
            <div class="pc:flex justify-between mt-20">
              <div class="bg-white pc:w-[30%] rounded-sm mb-14 pc:mb-0">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full rounded-lg"
                >
                  <div class="px-3">
                    <div class="flex flex-wrap justify-center">
                      <div class="w-full px-4 flex justify-center">
                        <div class="absolute top-[-45px]">
                          <img
                            alt="..."
                            src="{{ asset('images/lp/voice-image1.jpeg') }}"
                            class="w-[90px] h-[90px] rounded-full"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-12">
                      <h3 class="text-xl leading-normal mb-2 mb-2">
                        ALEX(21)
                      </h3>
                      <div
                        class="text-3xl font-bold text-sm leading-normal mt-0 mb-2 font-bold uppercase py-2 border-t border-b"
                      >
                        マンツーマンの<br />授業が充実
                      </div>
                    </div>
                    <div class="text-center">
                      <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-9/12">
                          <p
                            class="mb-4 text-lg leading-relaxed text-blueGray-700"
                          >
                            プログラミングを3ヵ月受講し、毎日先生が付きっ切りで教えてくれてすぐに質問できる環境がよかった。
                            Wifi環境も良くインドでも支障なく学習に集中できました。
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-white pc:w-[30%] rounded-sm mb-14 pc:mb-0">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full rounded-lg"
                >
                  <div class="px-3">
                    <div class="flex flex-wrap justify-center">
                      <div class="w-full px-4 flex justify-center">
                        <div class="absolute top-[-45px]">
                          <img
                            alt="..."
                            src="{{ asset('images/lp/voice-image2.jpeg') }}"
                            class="w-[90px] h-[90px] rounded-full"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-12">
                      <h3 class="text-xl leading-normal mb-2 mb-2">
                        MIKE(30)
                      </h3>
                      <div
                        class="text-3xl font-bold text-sm leading-normal mt-0 mb-2 font-bold uppercase py-2 border-t border-b"
                      >
                        本場のインドで<br />カレーの原点を知れた
                      </div>
                    </div>
                    <div class="text-center">
                      <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-9/12">
                          <p
                            class="mb-4 text-lg leading-relaxed text-blueGray-700"
                          >
                            スパイスの栽培からすべて教えてもらい、自分一人でインドカレー20種類、オリジナルのカレーも作ることができました！
                            この経験を生かして今後日本でインドカレー店をオープンする予定です！
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-white pc:w-[30%] rounded-sm">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full rounded-lg"
                >
                  <div class="px-3">
                    <div class="flex flex-wrap justify-center">
                      <div class="w-full px-4 flex justify-center">
                        <div class="absolute top-[-45px]">
                          <img
                            alt="..."
                            src="{{ asset('images/lp/voice-image3.jpeg') }}"
                            class="w-[90px] h-[90px] rounded-full"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-12">
                      <h3 class="text-xl leading-normal mb-2 mb-2">
                        July(27)
                      </h3>
                      <div
                        class="text-3xl font-bold text-sm leading-normal mt-0 mb-2 font-bold uppercase py-2 border-t border-b"
                      >
                        ヨガインストラクター<br />になれた
                      </div>
                    </div>
                    <div class="text-center">
                      <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-9/12">
                          <p
                            class="mb-4 text-lg leading-relaxed text-blueGray-700"
                          >
                            朝から晩まで1日中ヨガに集中できて、非常に満足です。最も良かったのがヨガのロケーション。丘にある大きなお家で毎朝ヨガをするのは至福のひと時でした。
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- question -->
      <section id="question" class="py-10">
        <h2 class="text-3xl tab:text-4xl font-bold mb-8 text-center">
          よくある質問
        </h2>
        <div class="mt-16 w-[90%] pc:w-[60%] mx-auto">
          <div
            class="relative border border-gray-400 p-2 question mb-4 cursor-pointer"
          >
            <span class="absolute question_arrow right-[3%] tab:top-[25px] bottom-[10px]"></span>
            <h3 class="text-xl tab:text-2xl font-bold py-2">
              英語が話せなくても大丈夫ですか？
            </h3>
            <p class="pb-4 answer hidden">
              はい、問題ございません。英語が話せない方は午前中英語、午後に個別スキルなどスキルに応じてカリキュラムを変えることができます。
            </p>
          </div>
          <div
            class="relative border border-gray-400 p-2 question mb-4 cursor-pointer"
          >
            <span class="absolute question_arrow right-[3%] tab:top-[25px] bottom-[10px]"></span>
            <h3 class="text-xl tab:text-2xl font-bold py-2">
              食事はどうなりますか？
            </h3>
            <p class="pb-4 answer hidden">
              基本的に滞在先のホストが用意してくれます。場合によっては外食の時もあります。
            </p>
          </div>
          <div
            class="relative border border-gray-400 p-2 question mb-4 cursor-pointer"
          >
            <span class="absolute question_arrow right-[3%] tab:top-[25px] bottom-[10px]"></span>
            <h3 class="text-xl tab:text-2xl font-bold py-2">
              滞在先は清潔ですか？
            </h3>
            <p class="pb-4 answer hidden">
              はい弊社スタッフも確認済みの清潔なホストだけを厳選しております。
            </p>
          </div>
          <div
            class="relative border border-gray-400 p-2 question cursor-pointer"
          >
            <span class="absolute question_arrow right-[3%] tab:top-[25px] bottom-[10px]"></span>
            <h3 class="text-xl tab:text-2xl font-bold py-2">
              滞在費はどれくらいかかりますか？
            </h3>
            <p class="pb-4 answer hidden">
              基本的に娯楽費、交通費のみで1ヵ月2万円程度で十分です
            </p>
          </div>
        </div>
      </section>

      <!-- overview -->
            <section id="overview"
        class="relative overflow-hidden bg-no-repeat bg-cover">
        <div
          class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
          style="background-color: rgba(0, 0, 0, 0.2);"
        >
        <div
            class="absolute right-0 left-0 mx-auto top-[50%] translate-y-[-50%] w-[90%] tab:w-[80%] text-center"
          >
            <h2 class="text-3xl tab:text-4xl font-bold mb-8">
              会社概要
            </h2>
            <div class="pc:flex justify-between gap-4">
                <div id="map" class="w-[90%] pc:w-[50%] h-[300px] mx-auto">
                </div>
                <div class="w-[90%] pc:w-[50%] mt-5 pc:mt-0 text-left text-[16px] text-white mx-auto">
                  <p class="mb-5">会社名：PAIABROAD.Ltd</p>
                  <p class="mb-5">代表者：篠崎雄一郎</p>
                  <p class="mb-5">住所：2 Soi Sukhumvit 23, Khwaeng Khlong Toei Nuea, Khet Watthana, Krung Thep Maha Nakhon 10250 タイ</p>
                  <p>営業時間：9:00~17:00(月〜金)</p>
                </div>
          </div>
        </div>
        </section>
    </main>

    <!-- footer -->
    <footer class="text-center bg-white text-[16px] py-5 px-2 tab:px-0">
      Copyright (C) 2022 PAIABROAD.Ltd All Rights Reserved.
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyCa3Kz9jbHCkSimQp3-k4_WqgADFKzqpWI&callback=initMap" async defer></script>
  </body>
</html>
