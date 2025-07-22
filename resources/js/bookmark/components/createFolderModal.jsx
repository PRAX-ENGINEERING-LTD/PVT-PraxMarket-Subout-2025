import React, { useState, useEffect } from "react";

const CreateFolderModal = ({ 
  isOpen, 
  onClose, 
  onSubmit, 
  isLoading = false, 
  mode = 'create', // 'create' or 'update'
  initialFolderName = '',
  folderData = null // Contains folder info for update mode
}) => {
  const [folderName, setFolderName] = useState("");
  const MAX_CHARACTERS = 50;

  useEffect(() => {
    if (isOpen) {
      if (mode === 'update' && initialFolderName) {
        setFolderName(initialFolderName);
      } else {
        setFolderName("");
      }
    }
  }, [isOpen, mode, initialFolderName]);

  if (!isOpen) return null;

  const handleInputChange = (e) => {
    const value = e.target.value;
    // Only allow input if it's within the character limit
    if (value.length <= MAX_CHARACTERS) {
      setFolderName(value);
    }
  };

  const isOverLimit = folderName.length > MAX_CHARACTERS;
  const remainingChars = MAX_CHARACTERS - folderName.length;

  const handleSubmit = (e) => {
    e.preventDefault();
    if (folderName.trim() && !isOverLimit) {
      onSubmit(folderName.trim(), folderData);
    }
  };

  const handleClose = () => {
    setFolderName("");
    onClose();
  };

  const isCreateMode = mode === 'create';
  const title = isCreateMode ? "Create Folder" : "Update Folder";
  const buttonText = isCreateMode ? "Submit" : "Update";
  const loadingText = isCreateMode ? "Creating..." : "Updating...";

  return (
    <div className="fixed inset-0 z-[100] flex items-center justify-center bg-black/70 bg-opacity-50">
      <div className="bg-white rounded-2xl shadow-lg w-96 p-6 relative">
        {/* Close Button */}
        <button
          onClick={handleClose}
          disabled={isLoading}
          className="absolute top-4 right-4 text-gray-500 hover:text-black"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            className="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>

        {/* Header */}
        <h2 className="text-xl font-semibold text-gray-800 mb-4">{title}</h2>
        <hr className="mb-4" />

        <form onSubmit={handleSubmit}>
          {/* Label */}
          <label className="block text-sm font-medium text-gray-700 mb-1">
            Enter Folder Name
          </label>

          {/* Input */}
          <input
            type="text"
            placeholder="3D Printing"
            value={folderName}
            onChange={handleInputChange}
            disabled={isLoading}
            maxLength={MAX_CHARACTERS}
            className={`w-full px-3 py-2 border rounded-lg bg-white text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent ${
              isOverLimit 
                ? 'border-red-500 focus:ring-red-500' 
                : 'border-gray-300 focus:ring-purple-500'
            }`}
          />

          {/* Character count and error message */}
          <div className="mt-2 flex justify-between items-center">
            <div className="text-xs">
              {isOverLimit ? (
                <span className="text-red-500 font-medium">
                  Character limit exceeded! Maximum {MAX_CHARACTERS} characters allowed.
                </span>
              ) : (
                <span className={remainingChars <= 10 ? 'text-orange-500' : 'text-gray-500'}>
                  {remainingChars} characters remaining
                </span>
              )}
            </div>
            <span className={`text-xs font-medium ${
              isOverLimit ? 'text-red-500' : 
              remainingChars <= 10 ? 'text-orange-500' : 'text-gray-500'
            }`}>
              {folderName.length}/{MAX_CHARACTERS}
            </span>
          </div>

          {/* Buttons */}
          <div className="mt-6 flex justify-start space-x-4">
            <button
              type="button"
              onClick={handleClose}
              disabled={isLoading}
              className={`px-4 py-2 border-2 border-purple-500 hover:bg-[#f7efff] text-purple-500 rounded-lg cursor-pointer ${
                isLoading ? 'opacity-50 cursor-not-allowed' : ''
              }`}
            >
              Cancel
            </button>
            <button 
              type="submit"
              disabled={isLoading || !folderName.trim() || isOverLimit}
              className={`px-4 py-2 bg-[#5B21B6] text-white rounded-lg hover:bg-[#5a21b6da] cursor-pointer flex items-center gap-2 ${
                isLoading || !folderName.trim() || isOverLimit ? 'opacity-50 cursor-not-allowed' : ''
              }`}
            >
              {isLoading && (
                <div className="animate-spin rounded-full h-4 w-4 border-2 border-white border-t-transparent"></div>
              )}
              {isLoading ? loadingText : buttonText}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default CreateFolderModal;
