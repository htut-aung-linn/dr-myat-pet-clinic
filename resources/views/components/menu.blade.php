<div class="nav">
    <!-- Be present above all else. - Naval Ravikant -->
    <!-- menu -->
    
        <svg id="menu-open" onclick="openWindow()" class="icon" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="35.4167" cy="16.6667" r="8.33333" fill="#33363F"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.1756 15.5833H39.5833C40.1356 15.5833 40.5833 15.1356 40.5833 14.5833C40.5833 14.0311 40.1356 13.5833 39.5833 13.5833H29.8833C29.5419 14.1947 29.2988 14.8685 29.1756 15.5833ZM28.1366 24C28.959 24.8165 29.918 25.4956 30.9763 26H10.4167C9.86439 26 9.41667 25.5523 9.41667 25C9.41667 24.4477 9.86439 24 10.4167 24H28.1366ZM25.1394 15.5833C25.2112 14.8943 25.3507 14.2254 25.5512 13.5833H10.4167C9.86439 13.5833 9.41667 14.0311 9.41667 14.5833C9.41667 15.1356 9.86439 15.5833 10.4167 15.5833H25.1394ZM10.4167 34.4167C9.86439 34.4167 9.41667 34.8644 9.41667 35.4167C9.41667 35.969 9.86439 36.4167 10.4167 36.4167H39.5833C40.1356 36.4167 40.5833 35.969 40.5833 35.4167C40.5833 34.8644 40.1356 34.4167 39.5833 34.4167H10.4167Z" fill="#33363F"/>
        </svg>
    <h1>Dr. Myat's Pet Clinic</h1>
    
    <!-- shop -->
    <a href="/PetProduct.com"><svg class="icon" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.33333 8.33334H13.0218C13.7717 8.33334 14.1467 8.33334 14.418 8.54514C14.6892 8.75693 14.7802 9.12071 14.9621 9.84827L15.9092 13.6368C16.273 15.0919 16.4549 15.8195 16.9974 16.2431C17.5399 16.6667 18.2899 16.6667 19.7898 16.6667H20.8333" stroke="#222222" stroke-width="2" stroke-linecap="round"/>
        <path d="M37.5 35.4167H15.2749C14.0086 35.4167 13.3755 35.4167 13.0762 35.0014C12.7769 34.5861 12.9771 33.9855 13.3775 32.7842L13.6716 31.9017C14.1116 30.5817 14.3317 29.9217 14.8554 29.5442C15.3792 29.1667 16.0749 29.1667 17.4664 29.1667H29.1667" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M34.1806 29.1667H18.3609C17.3832 29.1667 16.5489 28.4598 16.3881 27.4955L14.8744 18.4133C14.722 17.499 15.4271 16.6667 16.354 16.6667H40.0486C40.792 16.6667 41.2755 17.449 40.9431 18.1139L35.9694 28.0611C35.6307 28.7387 34.9381 29.1667 34.1806 29.1667Z" stroke="#222222" stroke-width="2" stroke-linecap="round"/>
        <circle cx="35.4167" cy="41.6667" r="2.08333" fill="#222222"/>
        <circle cx="18.75" cy="41.6667" r="2.08333" fill="#222222"/>
        </svg></a>
    
</div>
<div id="menu">
    <div id="m-g">
    <a href="/"><h3 class="menu-item
        @if($pageName=="Home")
        active
        @endif"
        >Home</h3><a>
        <a href="/PetProduct.com"><h3 class="menu-item
        @if($pageName=="product")
        active
        @endif"
        >Products</h3></a>
        <a href="/petCare.com"><h3 class="menu-item 
        @if($pageName=="petCare")
        active
        @endif"
        >Pet care</h3></a>
        <a href="/AboutUs.com"><h3 class="menu-item
        @if($pageName=="about")
        active
        @endif"
        >About us</h3></a>
    </div>
    <svg  id="close-btn" class="icon" onclick="closeWindow()" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="50" height="50" fill="white"/>
        <path d="M6.25 10.25C6.25 8.04086 8.04086 6.25 10.25 6.25H39.75C41.9591 6.25 43.75 8.04086 43.75 10.25V39.75C43.75 41.9591 41.9591 43.75 39.75 43.75H10.25C8.04086 43.75 6.25 41.9591 6.25 39.75V10.25Z" fill="#7E869E" fill-opacity="0.25"/>
        <path d="M18.7502 31.2493L31.2502 18.7493" stroke="#222222" stroke-width="1.2"/>
        <path d="M31.25 31.25L18.75 18.75" stroke="#222222" stroke-width="1.2"/>
    </svg>

</div>

<script>
        
    var menu = document.getElementById("menu");
    function closeWindow() {
        menu.style.display = "none";
    // Other actions you want to perform when the button is clicked
    }
    function openWindow() {
        menu.style.display = "flex";
    // Other actions you want to perform when the button is clicked
    }
</script>