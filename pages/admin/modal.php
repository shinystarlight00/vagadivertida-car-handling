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