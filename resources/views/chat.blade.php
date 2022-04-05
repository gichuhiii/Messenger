<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href="{{URL('assets/css/chat.css')}}">
        <title>My Chitty Chat </title>
</head>
<body>
    <div>
        <div id="out">
            <div id="left-panel">
                <div style="padding: 10px;">
            <img id="profile-image" src="{{URL('assets/images/profile1.jpg')}}">
            <br>
            Chuhi
            <br>
            <span style="font: sans-serif; opacity:0.5;">
            Chuchi@gmail.com
            </span>
            <br>
            <br>

            <label id="label-chat" for="radio-chat">Chats<img src="{{URL('assets/images/chat.gif')}}"></label>
            <label id="label-new" for="radio-new">New Chat <img src="{{URL('assets/images/new.gif')}}"></label>
            <label id="label-settings" for="radio-settings">Settings <img src="{{URL('assets/images/sett.gif')}}"></label>
                </div>

            </div>
            <div id="right-panel">
                <div id="header">yapayapa chitchat</div>
                    <div id="container" style="display: flex;">
                        <div id="inner-left-panel">
                           
                        </div>

                         <input type="radio" id="radio-chat" name="myradio" style="display:none;">
                         <input type="radio" id="radio-new" name="myradio" style="display:none;">
                         <input type="radio" id="radio-settings" name="myradio" style="display:none;">
                        
                        <div id="inner-right-panel">
                            
                        </div>
                    </div>
                </div>
            </div>
           
</body>
</html>
