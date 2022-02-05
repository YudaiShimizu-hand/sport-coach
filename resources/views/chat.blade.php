<html>
<body>
    <div id="chat">
        <textarea v-model="message"></textarea>
        <br>
        <button type="button" @click="send()">送信</button>
        
        <div v-for="m in messages">
            <span v-text="m.created_at"></span>：&nbsp;
            <span v-text="m.body"></span>
        </div>
    </div>
    
    <script src="/js/app.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>-->
    <!--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>-->
    
    <script>
        new Vue({
            beforeSend: function (xhr) {
            return xhr.setRequestHeader('X-CSRF-TOKEN', "{{csrf_token()}}");
            },
            el: '#chat',
            data: {
                message: '',
                messages: []
                },
            methods: {
                send() {
                    const url = '/ajax/chat';
                    const params = { message: this.message };
                    axios.post(url, params)
                        .then((response) => {
                            this.message = '';
                        });
                },
                
                getMessages() {
                    const url = '/ajax/chat';
                    console.log("a");
                    axios.get(url)
                        .then((response) => {
                        console.log("a");
                            this.messages = response.data;
                        });
                }
            },
            mounted(){
                this.getMessages();
                Echo.channel('chat')
                .listen('MessageCreated', (e) => {
        
                    this.getMessages(); // 全メッセージを再読込
        
                });
            }
        });
    </script>
</body>
</html>