<nav>
    <div class="nav">
        <ul>
            <li class="list active">
                <a>
                    <span class="icon">
                        <ion-icon name="add"></ion-icon>
                    </span>
                    <span class="text">Új lista</span>
                </a>
            </li>
            <li class="list">
                <a>
                    <span class="icon">
                        <ion-icon name="settings"></ion-icon>
                    </span>
                    <span class="text">Beállítások</span>
                </a>
            </li>
            <li class="list">
                <a>
                    <span class="icon">
                        <ion-icon name="list"></ion-icon>
                    </span>
                    <span class="text">Listák</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
</nav>
<script>
    const list = document.querySelectorAll('.list');
    function activeLink(){
        list.forEach((item) =>
            item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item) =>
    item.addEventListener('click', activeLink));
</script>