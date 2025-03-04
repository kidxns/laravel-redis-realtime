<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="css/index.css">
<script src="js/index.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.7.5/socket.io.js" integrity="sha512-luMnTJZ7oEchNDZAtQhgjomP1eZefnl82ruTH/3Oj/Yu5qYtwL7+dVRccACS/Snp1lFXq188XFipHKYE75IaQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.16.0/dist/echo.min.js"></script>
<!-- char-area -->
<section class="message-area" id="app">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="chat-area">
          <!-- chatlist -->
          <div class="chatlist">
            <div class="modal-dialog-scrollable">
              <div class="modal-content">
                <div class="chat-header">
                  <div class="msg-search">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" aria-label="search">
                    <a class="add" href="#"><img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/add.svg" alt="add"></a>
                  </div>

                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="Open-tab" data-bs-toggle="tab" data-bs-target="#Open" type="button" role="tab" aria-controls="Open" aria-selected="true">Open</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="Closed-tab" data-bs-toggle="tab" data-bs-target="#Closed" type="button" role="tab" aria-controls="Closed" aria-selected="false">Closed</button>
                    </li>
                  </ul>
                </div>

                <div class="modal-body">
                  <!-- chat-list -->
                  <div class="chat-lists">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="Open" role="tabpanel" aria-labelledby="Open-tab">
                        <!-- chat-list -->
                        <div class="chat-list">
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                              <span class="active"></span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Mehedi Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Ryhan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Malek Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Sadik Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Bulu </h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Maria SK</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Dipa Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Jhon Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Tumpa Moni</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Payel Akter</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Baby Akter</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Zuwel Rana</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Habib </h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Jalal Ahmed</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Hasan Ali</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Mehedi Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>

                        </div>
                        <!-- chat-list -->
                      </div>
                      <div class="tab-pane fade" id="Closed" role="tabpanel" aria-labelledby="Closed-tab">

                        <!-- chat-list -->
                        <div class="chat-list">
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                              <span class="active"></span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Mehedi Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Ryhan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Malek Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Sadik Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Bulu </h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Maria SK</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Dipa Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Jhon Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Tumpa Moni</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Payel Akter</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Baby Akter</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Zuwel Rana</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Habib </h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Jalal Ahmed</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Hasan Ali</h3>
                              <p>front end developer</p>
                            </div>
                          </a>
                          <a href="#" class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Mehedi Hasan</h3>
                              <p>front end developer</p>
                            </div>
                          </a>

                        </div>
                        <!-- chat-list -->
                      </div>
                    </div>

                  </div>
                  <!-- chat-list -->
                </div>
              </div>
            </div>
          </div>
          <!-- chatlist -->

          <!-- chatbox -->
          <div class="chatbox showbox">
            <div class="modal-dialog-scrollable">
              <div class="modal-content">
                <div class="msg-head">
                  <div class="row">
                    <div class="col-8">
                      <div class="d-flex align-items-center">
                        <span class="chat-icon"><img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg" alt="image title"></span>
                        <div class="flex-shrink-0">
                          <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h3>Mehedi Hasan</h3>
                          <p>front end developer</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <ul class="moreoption">
                        <li class="navbar nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="modal-body">
                  <div class="msg-body">
                    <ul>
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:06 am</span>
                      </li>
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:16 am</span>
                      </li>
                      <li class="repaly">
                        <p>yes!</p>
                        <span class="time">10:20 am</span>
                      </li>
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:26 am</span>
                      </li>
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:32 am</span>
                      </li>
                      <li class="repaly">
                        <p>How are you?</p>
                        <span class="time">10:35 am</span>
                      </li>
                      <li>
                        <div class="divider">
                          <h6>Today</h6>
                        </div>
                      </li>

                      <li class="repaly">
                        <p> yes, tell me</p>
                        <span class="time">10:36 am</span>
                      </li>
                      <li class="repaly">
                        <p>yes... on it</p>
                        <span class="time">junt now</span>
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="send-box">
                  <form action="">
                    <input type="text" v-model="message" @keyup.enter="sendMessage" class="form-control" aria-label="message…" placeholder="Write message…">

                    <button @click="sendMessage" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                  </form>

                  <div class="send-btns">
                    <div class="attach">
                      <div class="button-wrapper">
                        <span class="label">
                          <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/upload.svg" alt="image title"> attached file
                        </span><input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File" aria-label="Upload File">
                      </div>

                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>Select template</option>
                        <option>Template 1</option>
                        <option>Template 2</option>
                      </select>

                      <div class="add-apoint">
                        <a href="#" data-toggle="modal" data-target="#exampleModal4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                            <path d="M8 16C3.58862 16 0 12.4114 0 8C0 3.58862 3.58862 0 8 0C12.4114 0 16 3.58862 16 8C16 12.4114 12.4114 16 8 16ZM8 1C4.14001 1 1 4.14001 1 8C1 11.86 4.14001 15 8 15C11.86 15 15 11.86 15 8C15 4.14001 11.86 1 8 1Z" fill="#7D7D7D" />
                            <path d="M11.5 8.5H4.5C4.224 8.5 4 8.276 4 8C4 7.724 4.224 7.5 4.5 7.5H11.5C11.776 7.5 12 7.724 12 8C12 8.276 11.776 8.5 11.5 8.5Z" fill="#7D7D7D" />
                            <path d="M8 12C7.724 12 7.5 11.776 7.5 11.5V4.5C7.5 4.224 7.724 4 8 4C8.276 4 8.5 4.224 8.5 4.5V11.5C8.5 11.776 8.276 12 8 12Z" fill="#7D7D7D" />
                          </svg> Appoinment</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- chatbox -->

      </div>
    </div>
  </div>
  </div>
</section>
<!-- char-area -->
<script>
    new Vue({
        el:'#app',
        data(){
            return {
                message: ""
            }
        },
        methods: {
            sendMessage(){
                console.log(this.message);
            }
        }
    })
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
