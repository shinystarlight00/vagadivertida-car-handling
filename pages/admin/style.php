<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background-color: #f3f4f6;
        min-height: 100vh;
        position: relative;
        overflow-x: hidden;
    }

    header {
        background-color: #1f2937;
        color: white;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1002;
    }

    .sidebar {
        width: 250px;
        background-color: #1f2937;
        color: white;
        height: 100vh;
        position: fixed;
        right: -250px;
        top: 0;
        transition: all 0.3s;
        overflow-y: auto;
        z-index: 1001;
    }

    .sidebar.active {
        right: 0;
    }

    .sidebar-header {
        padding: 20px;
        text-align: center;
        border-bottom: 1px solid #374151;
    }

    .sidebar-menu {
        padding: 20px 0;
    }

    .sidebar-menu a {
        display: block;
        padding: 10px 20px;
        color: #d1d5db;
        text-decoration: none;
        transition: all 0.3s;
    }

    .sidebar-menu a:hover {
        background-color: #374151;
    }

    .sidebar-footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 20px;
        border-top: 1px solid #374151;
    }

    .overlay {
        position: fixed;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 1000;
        transition: opacity 0.3s ease;
    }

    .overlay.active {
        display: block;
        opacity: 1;
    }

    .btn-logout {
        width: 100%;
        padding: 10px;
        background-color: #ef4444;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .content {
        display: flex;
    }

    .preview {
        width: 50%;
        height: 100vh;
        overflow: hidden;
    }

    .preview iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .admin-control {
        width: 50%;
        height: 100vh;
        overflow-y: auto;
        padding: 20px;
    }

    .toggle-sidebar {
        float: right;
        background: #414460;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        z-index: 1001;
    }

    .tabs {
        display: flex;
        gap: 8px;
        padding: 16px;
        background: white;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .tab {
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .tab.active {
        background: #3b82f6;
        color: white;
    }

    .tab:not(.active) {
        background: #f3f4f6;
        color: #4b5563;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 24px;
        padding: 24px;
    }

    .card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.03);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-content {
        padding: 16px;
    }

    .modal {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.7);
        padding: 16px;
        z-index: 2000;
    }

    .modal.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background: white;
        padding: 24px;
        border-radius: 12px;
        max-width: 800px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
        padding-bottom: 16px;
        border-bottom: 1px solid #e5e7eb;
    }

    .close-button {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #4b5563;
    }

    .modal-actions {
        display: flex;
        gap: 12px;
        margin-top: 24px;
    }

    .btn {
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .btn-image {
      background-color: #ffdde3;
      color: #ba4646 !important;
    }

    .btn-edit {
        background: #3b82f6;
        color: white;
    }

    .btn-edit:hover {
        background: #2563eb;
    }

    .btn-delete {
        background: #ef4444;
        color: white;
    }

    .btn-delete:hover {
        background: #dc2626;
    }

    .loading {
        display: flex;
        justify-content: center;
        padding: 20px;
        color: #6b7280;
    }

    .edit-form {
        display: none;
        margin-top: 16px;
    }

    .edit-form.active {
        display: block;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #374151;
        font-weight: 500;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
    }

    .form-group textarea {
        min-height: 100px;
        resize: vertical;
    }

    .scaled-iframe {
        transform: scale(0.5);
        transform-origin: 0 0;
        border: none;
    }

    img {
      width: 100%;
    }
</style>