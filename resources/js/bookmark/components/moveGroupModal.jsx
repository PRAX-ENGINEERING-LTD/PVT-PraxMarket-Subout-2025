import React, { useState, useEffect } from "react";

const MoveGroupModal = ({
  isOpen,
  onClose,
  groupTransferDetails = [],
  onSubmit,
  isLoading = false,
}) => {


  if (!isOpen) return null;

  const handleSubmit = (e) => {

  };

  const handleClose = () => {

    onClose();
  };


  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/70 bg-opacity-50">
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
        <h2 className="text-xl font-semibold text-gray-800 mb-4"></h2>
        <hr className="mb-4" />

        {groupTransferDetails.map((group, index) => (
          <div key={index} className="mb-4">
            <h3 className="text-lg font-semibold text-gray-800 mb-2">{group.name}</h3>
          </div>
        ))}

      </div>
    </div>
  );
};

export default MoveGroupModal;
