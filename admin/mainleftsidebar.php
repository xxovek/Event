<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="nav-label"><a href="event.php">Events </a></li>
                <li class="nav-label"><a href="sponsers.php">Sponsers </a></li>
                <li class="nav-label"><a href="contacts.php">Contacts </a></li>
                <li class="nav-label"><a href="subscriber.php">Subscriber </a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<script type="text/javascript">
    $('li').removeClass('active');
    var regex = /[a-zA-Z]+.php/g;
    var input = location.pathname;
       if(regex.test(input)) {
          var matches = input.match(regex);
          $('a[href="'+matches[0]+'"]').closest('li').addClass('active');
       }
</script>
