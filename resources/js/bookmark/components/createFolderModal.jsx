import React from "react";

const CreateFolderModal = ({ isOpen, onClose }) => {
  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/70 bg-opacity-50">
      <div className="bg-white rounded-2xl shadow-lg w-96 p-6 relative">
        {/* Close Button */}
        <button
          onClick={onClose}
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
        <h2 className="text-xl font-semibold text-gray-800 mb-4">Create Folder</h2>
        <hr className="mb-4" />

        {/* Label */}
        <label className="block text-sm font-medium text-gray-700 mb-1">
          Enter Folder Name
        </label>

        {/* Input */}
        <input
          type="text"
          placeholder="3D Printing"
          className="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-400"
        />

        {/* Buttons */}
        <div className="mt-6 flex justify-start space-x-4">
          <button
            onClick={onClose}
            className="px-4 py-2 border border-purple-500 text-purple-500 rounded-lg hover:bg-purple-50 cursor-pointer"
          >
            Cancel
          </button>
          <button className="px-4 py-2 bg-[#5B21B6] text-white rounded-lg hover:bg-[#5a21b6da] cursor-pointer">
            Submit
          </button>
        </div>
      </div>
    </div>
  );
};

export default CreateFolderModal;
