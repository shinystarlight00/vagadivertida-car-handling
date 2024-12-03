<?php
  require '../../config/db.php';

  session_start();
              
  $signed = isset($_SESSION['user_name']);
  
  if(!$signed) {
    header("Location: /admin.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
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

        .tab:not(.active):hover {
            background: #e5e7eb;
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

        .card h3 {
            color: #1f2937;
            margin-bottom: 8px;
            font-size: 1.25rem;
        }

        .card p {
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .category {
            display: inline-block;
            margin-top: 12px;
            padding: 4px 12px;
            background: #dbeafe;
            color: #1e40af;
            border-radius: 9999px;
            font-size: 0.875rem;
        }

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.7);
            padding: 16px;
            z-index: 1000;
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

        .modal-header h2 {
            font-size: 1.5rem;
            color: #1f2937;
        }

        .close-button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #4b5563;
        }

        .modal img {
            width: 100%;
            max-height: 500px;
            object-fit: contain;
            margin-bottom: 16px;
            border-radius: 8px;
        }

        .modal-actions {
            display: flex;
            gap: 12px;
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid #e5e7eb;
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

        .btn-logout {
          background: #3b82f6;
          color: white;
          position: absolute;
          right: 50px;
          padding: 12px 24px;
          border: none;
          border-radius: 8px;
          cursor: pointer;
          font-size: 16px;
          transition: all 0.3s ease;
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
    </style>
</head>
<body>
    <div class="tabs">
        <button class="tab active" data-tab="pictures">Pictures</button>
        <button class="tab" data-tab="contents">Contents</button>
        <button class="btn-logout" onclick="logout()">Log out</button>
    </div>
    <div class="grid" id="grid"></div>
    <div class="modal" id="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modal-title">Edit Content</h2>
                <button class="close-button">&times;</button>
            </div>
            <div id="modal-body"></div>
            <div class="edit-form" id="edit-form">
              <div class="form-group">
                  <label class="btn btn-image" id="file-name" for="edit-file">Upload file</label>
                  <input type="file" id="edit-file" hidden></input>
              </div>
              <div class="form-group">
                  <label for="edit-description">Description</label>
                  <textarea id="edit-description"></textarea>
              </div>
                <div class="modal-actions">
                    <button class="btn btn-edit" onclick="saveEdit()">Save Changes</button>
                    <button class="btn btn-delete" onclick="cancelEdit()">Cancel</button>
                </div>
            </div>
            <div class="modal-actions" id="modal-actions">
                <button class="btn btn-edit" onclick="editItem()">Edit</button>
            </div>
        </div>
    </div>

    <script>
        // API Configuration
        const API_BASE_URL = '/utils/fetchData.php';
        const UPDATE_URL = '/utils/update.php';

        // State
        let activeTab = 'pictures';
        let currentPage = 1;
        let currentItem = null;
        const itemsPerPage = 12;
        let isLoading = false;

        // DOM Elements
        const gridElement = document.getElementById('grid');
        const modalElement = document.getElementById('modal');
        const modalBody = document.getElementById('modal-body');
        const editForm = document.getElementById('edit-form');
        const filename = document.getElementById('file-name');
        const modalActions = document.getElementById('modal-actions');
        const tabs = document.querySelectorAll('.tab');

        // API Functions
        async function fetchItems(type, page, limit) {
            try {
                const response = await fetch(
                    `${API_BASE_URL}?type=${type}&page=${page}&limit=${limit}`
                );
                if (!response.ok) throw new Error(`Failed to fetch ${type}`);
                
                const data = await response.json();

                if(data.success) {
                  return data.data;
                } else {
                  console.error(`Error fetching ${type}`);
                  return [];
                }
            } catch (error) {
                console.error(`Error fetching ${type}:`, error);
                return [];
            }
        }

        async function updateItem(type, id, data) {
            try {
                const formData = await generateFormData(data, type);

                const response = await fetch(`${UPDATE_URL}`, {
                    method: 'POST',
                    body: formData,
                });

                if (!response.ok) throw new Error(`Failed to update ${type}`);

                const responseData = await response.json();

                if(responseData.success) {
                  alert(`Successfully changed ${type}`);
                  return data;
                } else {
                  console.error(`Error updating ${type}`);
                  return null;
                }

            } catch (error) {
                console.error(`Error updating ${type}:`, error);
                return null;
            }
        }
        
        function generateFormData(data, type) {
          const formData = new FormData();

          for (const key in data) {
            if (data.hasOwnProperty(key)) {
              const value = data[key];
              formData.append(key, value);
            }
          }

          if(type == 'pictures') {
            const inputElement = document.getElementById('edit-file');
            const file = inputElement.files[0];

            if (file) {
              formData.append('image', file);
            }
          }

          return formData;
        }

        // UI Functions
        function createCard(item) {
            const card = document.createElement('div');
            card.className = 'card';
            
            const isPicture = item.type === 'pictures';
            const content = isPicture
                ? `
                    <img src="../../assets/${item.url}" alt="${item.description}">
                    <div class="card-content">
                        <p>${item.description}</p>
                    </div>
                `
                : `
                    <div class="card-content">
                        <p>${item.description}</p>
                    </div>
                `;
            
            card.innerHTML = content;
            card.addEventListener('click', () => showModal(item));
            return card;
        }

        function showModal(item) {
            currentItem = item;
            const isPicture = item.type === 'pictures';
            modalBody.innerHTML = isPicture
                ? `
                    <img src="../../assets/${item.url}" alt="${item.description}">
                    <p>${item.description}</p>
                `
                : `
                    <p>${item.description}</p>
                `;
            modalElement.classList.add('active');
            editForm.classList.remove('active');
            modalActions.style.display = 'flex';
            filename.style.display = isPicture ? "block" : "none";
        }

        function editItem() {
            document.getElementById('edit-description').value = currentItem.description;
            editForm.classList.add('active');
            modalActions.style.display = 'none';
        }

        async function saveEdit() {
            const newDescription = document.getElementById('edit-description').value;
            
            const type = 'url' in currentItem ? 'pictures' : 'contents';
            const updatedItem = await updateItem(type, currentItem.id, {
                ...currentItem,
                description: newDescription,
            });

            if (updatedItem) {
                currentItem = updatedItem;
                showModal(updatedItem);
                // Refresh the grid
                currentPage = 1;
                gridElement.innerHTML = '';
                loadMoreItems();
            }
        }

        function cancelEdit() {
            editForm.classList.remove('active');
            modalActions.style.display = 'flex';
        }

        async function loadMoreItems() {
            if (isLoading) return;

            isLoading = true;
            gridElement.insertAdjacentHTML('beforeend', '<div class="loading">Loading...</div>');

            const items = await fetchItems(activeTab, currentPage, itemsPerPage);
            
            const loadingElement = document.querySelector('.loading');
            if (loadingElement) loadingElement.remove();

            items.forEach(item => {
                gridElement.appendChild(createCard(item));
            });

            isLoading = false;
            if (items.length === itemsPerPage) {
                currentPage++;
            }
        }

        function logout() {
          fetch("/utils/logout.php", {
            method: "GET"
          })
          .then(response => response.text()) // Parse the response text
          .then(data => {
              alert(data);
              goLoginPage();
          })
          .catch(error => {
              console.error("Error:", error);
          });
        }

        function goLoginPage() {
          window.location.href = "/admin.php";
        }

        document.getElementById('edit-file').addEventListener('change', function () {
          const inputElement = this;
          const file = inputElement.files[0];

          if (file) {
            document.getElementById('file-name').textContent = `Selected file: ${file.name}`;
          }
        });

        // Event Listeners
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                activeTab = tab.dataset.tab;
                currentPage = 1;
                gridElement.innerHTML = '';
                loadMoreItems();
            });
        });

        modalElement.addEventListener('click', (e) => {
            if (e.target === modalElement || e.target.classList.contains('close-button')) {
                modalElement.classList.remove('active');
            }
        });

        window.addEventListener('scroll', () => {
            const { scrollTop, clientHeight, scrollHeight } = document.documentElement;
            if (scrollTop + clientHeight >= scrollHeight - 100) {
                loadMoreItems();
            }
        });

        // Initial load
        loadMoreItems();
    </script>
</body>
</html>