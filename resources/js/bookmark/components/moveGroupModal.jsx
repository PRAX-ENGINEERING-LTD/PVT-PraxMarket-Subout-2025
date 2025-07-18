import React, { useState, useEffect } from "react";
import { FaRegFolder } from "react-icons/fa";
import { FaRegCircleCheck } from "react-icons/fa6";

const MoveGroupModal = ({
  isOpen,
  onClose,
  groupTransferDetails = [],
  onSubmit,
  isLoading = false,
}) => {
  const [selectedFolder, setSelectedFolder] = useState(null);

  // Reset selection when modal opens
  useEffect(() => {
    if (isOpen) {
      setSelectedFolder(null);
    }
  }, [isOpen]);

  if (!isOpen) return null;

  const handleSubmit = (e) => {
    e.preventDefault();
    if (onSubmit && selectedFolder !== null) {
      onSubmit(selectedFolder); // Pass the selected folder index
      setSelectedFolder(null); // Reset selection after submit
    }
  };

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/70">
      <div className="bg-white rounded-2xl shadow-lg w-96 max-h-[80vh] p-6 relative">
        {/* Close Button */}
        <button
          onClick={onClose}
          disabled={isLoading}
          className="absolute top-5 right-5 text-black bg-gray-200 rounded-full p-2 transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
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
        <h2 className="text-lg font-semibold text-gray-800 mb-4">Select Folder</h2>
        <hr className="mb-4" />

        {/* Folder List */}
        <h2 className="text-sm font-medium text-gray-800 mb-1">Folders</h2>
        <div className="space-y-3 max-h-[240px] overflow-y-auto pr-2">
          {(groupTransferDetails || []).length === 0 ? (
            <div className="text-center py-8 text-gray-500">
              <FaRegFolder className="mx-auto text-2xl mb-2 text-gray-400" />
              <p className="text-sm">No folders available</p>
            </div>
          ) : (
            (groupTransferDetails || []).map((group, index) => {
              const isSelected = selectedFolder === index;
              return (
                <div
                  key={index}
                  onClick={() => setSelectedFolder(index)}
                  className={`flex items-center justify-between gap-2 cursor-pointer py-2 px-3 rounded-md transition-all
                    ${isSelected
                      ? "bg-[#f7efff] border-2 border-[#7366FF]"
                      : "bg-gray-200 hover:bg-[#f7efff] hover:border hover:border-[#7366FF]"
                    }`}
                >
                  <div className="flex items-center gap-2">
                    <FaRegFolder className="text-gray-600 text-base" />
                    <span className="text-sm font-medium text-gray-800 max-w-[200px] truncate">{group?.folderName || 'Unnamed Folder'}</span>
                  </div>
                  {isSelected && (
                    <FaRegCircleCheck className="text-green-500 text-lg" />
                  )}
                </div>
              );
            })
          )}
        </div>

        {/* Action Buttons */}
        <div className="mt-6 flex justify-start gap-3">
          <button
            type="button"
            onClick={onClose}
            className="px-4 py-2 border border-purple-500 text-purple-500 rounded-md hover:bg-purple-50 transition-colors"
          >
            Cancel
          </button>
          <button
            type="submit"
            onClick={handleSubmit}
            disabled={isLoading || selectedFolder === null || (groupTransferDetails || []).length === 0}
            className="px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
          >
            {isLoading ? 'Moving...' : 'Submit'}
          </button>
        </div>
      </div>
    </div>
  );
};

export default MoveGroupModal;
