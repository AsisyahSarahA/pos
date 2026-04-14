    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f7fb;
            overflow-x: hidden;
        }
        .sidebar-item-active {
            background-color: #5d87ff;
            color: white !important;
            box-shadow: 0 4px 12px rgba(93, 135, 255, 0.25);
        }
        .card-shadow {
            box-shadow: 0 10px 30px 0 rgba(0,0,0,0.02);
        }
        aside {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
        }
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
        /* State visibility */
        .page-content { display: none; }
        .active-page { display: block; }
    </style>
