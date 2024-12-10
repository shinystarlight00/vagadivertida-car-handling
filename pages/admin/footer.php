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
        const controlElement = document.querySelector('.admin-control');
        const modalElement = document.getElementById('modal');
        const modalBody = document.getElementById('modal-body');
        const editForm = document.getElementById('edit-form');
        const filename = document.getElementById('file-name');
        const modalActions = document.getElementById('modal-actions');
        const tabs = document.querySelectorAll('.tab');

        // Side bar
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('toggle-sidebar');
        const overlay = document.getElementById('overlay');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        });

        async function fetchItems(type, page, limit) {
            
            try {
                const response = await fetch(
                    `${API_BASE_URL}?type=${type}&page=${page}&limit=${limit}&pageName=${pageName}`
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
            
            const type = currentItem.type;
            const updatedItem = await updateItem(type, currentItem.id, {
                ...currentItem,
                description: newDescription,
            });

            if (updatedItem) {
                 refreshPage();
                // currentItem = updatedItem;
                // showModal(updatedItem);
                // // Refresh the grid
                // currentPage = 1;
                // gridElement.innerHTML = '';
                // loadMoreItems();
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
            if (items.length > 0) {
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

        function refreshPage() {
          location.reload();
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

        // window.addEventListener('scroll', () => {
        //     const { scrollTop, clientHeight, scrollHeight } = document.documentElement;
        //     if (scrollTop + clientHeight >= scrollHeight - 100) {
        //         loadMoreItems();
        //     }
        // });

        function onScroll() {
            const { scrollTop, scrollHeight, clientHeight } = controlElement;

            if (scrollTop + clientHeight >= scrollHeight - 100) {
                loadMoreItems();
            }
        }

        controlElement.addEventListener('scroll', onScroll);

        loadMoreItems();
    </script>
</body>
</html>