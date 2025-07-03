import React from "react";
import { IoMdInformationCircleOutline } from "react-icons/io";

const DeleteConfirmationModal = ({ isOpen, onClose, onConfirm, subtitle }) => {
  if (!isOpen) return null;

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/70 bg-opacity-50">
      <div className="bg-white rounded-2xl shadow-lg w-96 p-6 relative">
    
        <IoMdInformationCircleOutline className="text-red-600 w-8 h-8 mx-auto mb-4" />

        {/* Subtitle */}
        <p className="text-gray-800 mb-6 text-center">{subtitle}</p>

        {/* Buttons */}
        <div className="flex justify-center items-center space-x-4">
          <button
            onClick={onClose}
            className="px-4 py-2 border border-red-400 text-red-600 rounded-lg hover:bg-gray-100 cursor-pointer"
          >
            Cancel
          </button>
          <button
            onClick={onConfirm}
            className="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 cursor-pointer"
          >
            Confirm
          </button>
        </div>
      </div>
    </div>
  );
};

export default DeleteConfirmationModal;
