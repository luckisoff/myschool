<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 999999;
        background-color: #fff;
        text-align: center;
    }

    .loader-gif {
        width: 20%;
        position: relative;
        top: 30%;
    }
</style>
<div class="loader">
    <img src="{{asset('01-progress.gif')}}" class="loader-gif" />
</div>