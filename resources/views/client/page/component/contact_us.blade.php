<div class="section pt-3 pb-10">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="noo-section-title mb-3">
                    <h3><span>Liên hệ với chúng tôi</span></h3>
                    <p>Để lại lời nhắn</p>
                </div>
                <form class="contact-form" method="POST" action="{{route('client.message.store')}}">
                    {{ csrf_field()}}
                    <div class="row">
                        <div class="comment-form-author col-md-6">
                            <input id="author" name="name" type="text" placeholder="Tên của bạn *" value=""
                                   size="30" required/>
                        </div>
                        <div class="comment-form-email col-md-6">
                            <input id="phone" name="phone" type="text" placeholder="Số điện thoại *" value=""
                                   pattern="(0[3|5|7|8|9|])+([0-9]{8})\b"
                                   size="30" required/>
                        </div>
                        <div class="comment-form-url col-md-12">
                            <input id="email" name="email" type="text" placeholder="Địa chỉ Email *" value=""
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                   size="30" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="comment-form-comment col-md-12">
                                    <textarea placeholder="Ý kiến thắc mắc ..." id="comment" name="message" cols="40"
                                              rows="6" required></textarea>
                        </div>
                        <div class="form-submit text-center col-md-12">
                            <input name="submit" type="submit" id="submit" class="submit" value="Gửi"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
