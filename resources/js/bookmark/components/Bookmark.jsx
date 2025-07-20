import React, { useEffect, useState } from 'react';
import Carousel from 'react-multi-carousel';
import 'react-multi-carousel/lib/styles.css';
import { FaChevronLeft, FaChevronRight } from 'react-icons/fa';
import CompanyCard from './companyCard';
import { FaRegHandshake } from "react-icons/fa6";
import { AiOutlineDelete } from "react-icons/ai";
import { FiEdit } from "react-icons/fi";
import { LuPlus } from "react-icons/lu";
import CreateFolderModal from './createFolderModal';
import DeleteConfirmationModal from './deleteConfirmationModal';
import MoveGroupModal from './moveGroupModal';
import { TbTriangleSquareCircle } from "react-icons/tb";
import { HiOutlineLocationMarker } from "react-icons/hi";
import { FaRegCalendarCheck } from "react-icons/fa";
import { FiChevronDown, FiChevronUp } from "react-icons/fi";
import { ToastContainer,toast } from 'react-toastify';



const Bookmark = ({ getRecommendedSuppliers, getBookmarkedCompanies, getApprovedSuppliers, getSelectedSuppliers, getBookmarkAds, getAvailableCustomBookmarkApis, addNewBookmarkFolder, deleteBookmarkFolder, updateBookmarkFolder }) => {
    const [recommendedSuppliers, setRecommendedSuppliers] = useState([]);
    const [bookmarkSuppliers, setBookmarkSuppliers] = useState([]);
    const [bookmarkSuppliersCount, setBookmarkSuppliersCount] = useState(0);
    const [approvedSuppliers, setApprovedSuppliers] = useState([]);
    const [approvedSuppliersCount, setApprovedSuppliersCount] = useState(0);
    const [selectedSuppliers, setSelectedSuppliers] = useState([]);
    const [selectedSuppliersCount, setSelectedSuppliersCount] = useState(0);
    const [bookmarkAds, setBookmarkAds] = useState({});
    const [isCreateFolderModalOpen, setIsCreateFolderModalOpen] = useState(false);
    const [isDeleteConfirmationModalOpen, setIsDeleteConfirmationModalOpen] = useState(false);
    const [isDeleteCompanyConfirmationModalOpen, setIsDeleteCompanyConfirmationModalOpen] = useState(false);
    const [onDeleteCompany, setOnDeleteCompany] = useState({});
    const [isDeleting, setIsDeleting] = useState(false);
    const [isCreatingFolder, setIsCreatingFolder] = useState(false);
    const [isDeletingFolder, setIsDeletingFolder] = useState(false);
    const [folderToDelete, setFolderToDelete] = useState(null);
    const [isUpdatingFolder, setIsUpdatingFolder] = useState(false);
    const [folderToUpdate, setFolderToUpdate] = useState(null);
    const [modalMode, setModalMode] = useState('create'); // 'create' or 'update'
    const [customFolder, setCustomFolder] = useState([]);
    const [customFolderData, setCustomFolderData] = useState([]);
    const [isMoveGroupModalOpen, setIsMoveGroupModalOpen] = useState(false);
    const [groupTransferDetails, setGroupTransferDetails] = useState([]);
    const [isMoveTransferLoading, setIsMoveTransferLoading] = useState(false);
    const [isCustomFoldersLoading, setIsCustomFoldersLoading] = useState(false);
    const [isRecommendedLoading, setIsRecommendedLoading] = useState(false);
    const [isBookmarkedLoading, setIsBookmarkedLoading] = useState(false);
    const [isApprovedLoading, setIsApprovedLoading] = useState(false);
    const [isSelectedLoading, setIsSelectedLoading] = useState(false);
    const [isAdsLoading, setIsAdsLoading] = useState(false);


    // Filter states for bookmarked suppliers
    const [bookmarkedFilters, setBookmarkedFilters] = useState({
        catagoryID: '',
        availablityStatus: '',
        distance: ''
    });

    // Filter states for approved suppliers
    const [approvedFilters, setApprovedFilters] = useState({
        catagoryID: '',
        availablityStatus: '',
        distance: ''
    });

    // Custom Dropdown Component
    const CustomDropdown = ({ icon: Icon, placeholder, value, options, onChange, className = "" }) => {
        const [isOpen, setIsOpen] = useState(false);
        const [dropdownRef, setDropdownRef] = useState(null);

        // Close dropdown when clicking outside
        useEffect(() => {
            const handleClickOutside = (event) => {
                if (dropdownRef && !dropdownRef.contains(event.target)) {
                    setIsOpen(false);
                }
            };
            document.addEventListener('mousedown', handleClickOutside);
            return () => document.removeEventListener('mousedown', handleClickOutside);
        }, [dropdownRef]);

        const selectedOption = options.find(option => option.value === value);
        const hasSelection = value && value !== '';

        // Determine button styles based on state
        const getButtonStyles = () => {
            if (isOpen) {
                // When dropdown is open - purple background
                return "border border-[#7366FF] rounded-md py-2 pl-10 pr-8 bg-[#7366FF] text-sm shadow-sm appearance-none w-full text-left transition-colors duration-200";
            } else if (hasSelection) {
                // When item is selected - light purple background
                return "border border-[#7366FF] rounded-md py-2 pl-10 pr-8 bg-[#f7efff] text-sm shadow-sm appearance-none w-full text-left hover:border-[#7366FF] focus:border-[#7366FF] focus:ring-1 focus:ring-[#7366FF] transition-colors duration-200";
            } else {
                // Default state - white background
                return "border border-gray-300 rounded-md py-2 pl-10 pr-8 bg-white text-sm shadow-sm appearance-none w-full text-left hover:border-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors duration-200";
            }
        };

        // Determine icon and text colors based on state
        const getIconColor = () => {
            if (isOpen) {
                return "absolute left-3 top-1/2 transform -translate-y-1/2 text-white text-sm pointer-events-none z-10";
            } else if (hasSelection) {
                return "absolute left-3 top-1/2 transform -translate-y-1/2 text-[#7366FF] text-sm pointer-events-none z-10";
            } else {
                return "absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 text-sm pointer-events-none z-10";
            }
        };

        const getTextColor = () => {
            if (isOpen) {
                return "text-white";
            } else if (hasSelection) {
                return "text-[#5B21B6] font-medium";
            } else {
                return "text-gray-700";
            }
        };

        const getChevronColor = () => {
            if (isOpen) {
                return "absolute right-3 top-1/2 transform -translate-y-1/2 text-white pointer-events-none transition-transform duration-200";
            } else if (hasSelection) {
                return "absolute right-3 top-1/2 transform -translate-y-1/2 text-[#5B21B6] pointer-events-none transition-transform duration-200";
            } else {
                return "absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 pointer-events-none transition-transform duration-200";
            }
        };

        return (
            <div className={`relative ${className}`} ref={setDropdownRef}>
                <button
                    type="button"
                    className={getButtonStyles()}
                    onClick={() => setIsOpen(!isOpen)}
                >
                    <Icon className={getIconColor()} />
                    <span className={getTextColor()}>
                        {selectedOption ? selectedOption.label : placeholder}
                    </span>
                    {isOpen ? (
                        <FiChevronUp className={getChevronColor()} />
                    ) : (
                        <FiChevronDown className={getChevronColor()} />
                    )}
                </button>
                
                {isOpen && (
                    <div className="absolute z-[9999] w-full mt-2 bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto">
                        {options.map((option) => (
                            <button
                                key={option.value}
                                type="button"
                                className="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition-colors duration-150"
                                onClick={() => {
                                    onChange(option.value);
                                    setIsOpen(false);
                                }}
                            >
                                {option.label}
                            </button>
                        ))}
                    </div>
                )}
            </div>
        );
    };

    // Filter options
    const categoryOptions = [
        { value: '', label: 'Category' },
        { value: '67c85d62ffbee109920dd5e2', label: 'sample 133' },
        { value: '67c86253179ba1a66e0a5192', label: 'sddsds' },
        { value: '67e3bc5c0e460de8090dcbe2', label: 'Sample' }
    ];

    const distanceOptions = [
        { value: '', label: 'Distance' },
        { value: '1', label: 'Within 1 km' },
        { value: '5', label: 'Within 5 km' },
        { value: '10', label: 'Within 10 km' }
    ];

    const availabilityOptions = [
        { value: '', label: 'Availability' },
        { value: 'available', label: 'Available' },
        { value: '4-6 weeks', label: '4-6 weeks' },
        { value: '2-3 months', label: '2-3 months' }
    ];

    useEffect(() => {
        setIsRecommendedLoading(true);
        $.ajax({
            url: getRecommendedSuppliers,
            method: 'GET',
            success: (response) => {
                console.log('RecommendedSuppliers:', response);
                setRecommendedSuppliers(response.recomendedCompanies);
            },
            error: (xhr, status, error) => {
                console.error('Error loading RecommendedSuppliers:', error);
            },
            complete: () => {
                setIsRecommendedLoading(false);
            }
        });
        $.ajax({
            url: getAvailableCustomBookmarkApis,
            method: 'GET',
            success: (response) => {
                console.log('getAvailableCustomBookmarkApis:', response);
                setCustomFolder(response);
            },
            error: (xhr, status, error) => {
                console.error('Error loading getAvailableCustomBookmarkApis:', error);
            },
        });
        fetchBookmarkedCompanies();
        fetchApprovedCompanies();
        setIsSelectedLoading(true);
        $.ajax({
            url: getSelectedSuppliers,
            method: 'GET',
            success: (response) => {
                console.log('SelectedSuppliers:', response);
                setSelectedSuppliers(response.selectedCompanies);
                setSelectedSuppliersCount(response.selectedCompaniesCount);
            },
            error: (xhr, status, error) => {
                console.error('Error loading SelectedSuppliers:', error);
            },
            complete: () => {
                setIsSelectedLoading(false);
            }
        });
        setIsAdsLoading(true);
        $.ajax({
            url: getBookmarkAds,
            method: 'GET',
            success: (response) => {
                console.log('BookmarkADD:', response);
                setBookmarkAds(response);
            },
            error: (xhr, status, error) => {
                console.error('Error loading BookmarkADD:', error);
            },
            complete: () => {
                setIsAdsLoading(false);
            }
        });
    }, [getRecommendedSuppliers, getBookmarkedCompanies, getApprovedSuppliers, getSelectedSuppliers, getBookmarkAds]);

    // Effect to refetch bookmarked companies when filters change
    useEffect(() => {
        fetchBookmarkedCompanies(bookmarkedFilters);
    }, [bookmarkedFilters]);

    // Effect to refetch approved companies when filters change
    useEffect(() => {
        fetchApprovedCompanies(approvedFilters);
    }, [approvedFilters]);

    const responsive = {
        desktop: {
            breakpoint: { max: 3000, min: 1024 },
            items: 5,
            partialVisibilityGutter: 40,
        },
        tablet: {
            breakpoint: { max: 1024, min: 464 },
            items: 2,
            partialVisibilityGutter: 30,
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            partialVisibilityGutter: 30,
        },
    };
    const responsive2 = {
        desktop: {
            breakpoint: { max: 3000, min: 1024 },
            items: 3,
            partialVisibilityGutter: 40,
        },
        tablet: {
            breakpoint: { max: 1024, min: 464 },
            items: 2,
            partialVisibilityGutter: 30,
        },
        mobile: {
            breakpoint: { max: 464, min: 0 },
            items: 1,
            partialVisibilityGutter: 30,
        },
    };

    const CustomButtonGroupAsArrows = ({ next, previous, ...rest }) => {
        return (
            <div className="absolute top-4 right-3 -translate-y-1/2 z-50 flex space-x-2">
                <button
                    onClick={previous}
                    className="bg-[#333333]/40 p-2 rounded-lg shadow hover:bg-[#333333]/50 cursor-pointer"
                >
                    <FaChevronLeft className='text-white' />
                </button>
                <button
                    onClick={next}
                    className="bg-[#333333]/40 p-2 rounded-lg shadow hover:bg-[#333333]/50 cursor-pointer"
                >
                    <FaChevronRight className='text-white' />
                </button>
            </div>
        );
    };

    // New function for 2-row grouping pattern: 1,2,3 / 4,5,6 | 7,8,9 / 10,11,12 | etc.
    const groupArrayInTwoRows = (array) => {
        // Add null check to prevent undefined errors
        if (!array || !Array.isArray(array)) {
            return [];
        }

        const grouped = [];
        const itemsPerColumn = 6; // 3 items in top row + 3 items in bottom row

        for (let i = 0; i < array.length; i += itemsPerColumn) {
            const columnItems = array.slice(i, i + itemsPerColumn);

            // Split into top row (first 3) and bottom row (next 3)
            const topRow = columnItems.slice(0, 3);
            const bottomRow = columnItems.slice(3, 6);

            // Create pairs for each row position
            const pairs = [];
            const maxLength = Math.max(topRow.length, bottomRow.length);

            for (let j = 0; j < maxLength; j++) {
                const pair = [];
                if (topRow[j]) pair.push(topRow[j]);
                if (bottomRow[j]) pair.push(bottomRow[j]);
                if (pair.length > 0) pairs.push(pair);
            }

            grouped.push(...pairs);
        }

        return grouped;
    };

    const formatCountWithLeadingZero = (count) => {
        // Handle undefined, null, or non-numeric values
        const numericCount = count || 0;
        return numericCount < 10 ? `0${numericCount}` : numericCount.toString();
    };


    // Multiply bookmarkSuppliers array 3 times
    const multipliedBookmarkSuppliers = [...(bookmarkSuppliers || []), ...(bookmarkSuppliers || []), ...(bookmarkSuppliers || [])];
    const bookmarkgrouped = groupArrayInTwoRows(multipliedBookmarkSuppliers);
    const approvedgrouped = groupArrayInTwoRows(approvedSuppliers || []);


    const customheight = (bookmarkgrouped.length < 4 ) && (approvedgrouped.length < 4);

    const EmptyItemsMessage = () => (
        <div className="flex flex-col w-full items-center justify-center text-center text-gray-500 h-[calc(100%-48px)]">
            <FaRegHandshake className='text-black text-2xl' />
            <h3 className='text-black text-lg font-bold'>No Suppliers Added Yet</h3>
            <p className='text-black text-sm font-normal max-w-xs'>Start adding profiles to keep track of the suppliers you’re interested in.</p>
        </div>
    )

    const onClickDeleteCompany = () => {
        if (onDeleteCompany && onDeleteCompany.deleteUrl) {
            setIsDeleting(true);
            $.ajax({
                url: onDeleteCompany.deleteUrl,
                method: 'GET',
                success: (response) => {
                    console.log('Company deleted successfully:', response);
                    toast.success('Company deleted successfully!', {
                        position: "top-right",
                        autoClose: 3000,
                        hideProgressBar: false,
                        closeOnClick: true,
                        pauseOnHover: true,
                        draggable: true,
                    });
                    setIsDeleteCompanyConfirmationModalOpen(false);
                    setOnDeleteCompany({});
                    setIsDeleting(false);

                    // Refresh the data after successful deletion using filter-aware functions
                    fetchBookmarkedCompanies(bookmarkedFilters);
                    fetchApprovedCompanies(approvedFilters);
                    fetchCustomFolders();

                    // Re-fetch selected companies
                    $.ajax({
                        url: getSelectedSuppliers,
                        method: 'GET',
                        success: (response) => {
                            setSelectedSuppliers(response.selectedCompanies);
                            setSelectedSuppliersCount(response.selectedCompaniesCount);
                        }
                    });
                },
                error: (xhr, status, error) => {
                    console.error('Error deleting company:', error);
                    toast.error('Failed to delete company. Please try again.', {
                        position: "top-right",
                        autoClose: 3000,
                        hideProgressBar: false,
                        closeOnClick: true,
                        pauseOnHover: true,
                        draggable: true,
                    });
                    setIsDeleteCompanyConfirmationModalOpen(false);
                    setIsDeleting(false);
                },
            });
        }
    }

    const fetchBookmarkedCompanies = (filters = {}) => {
        const queryParams = new URLSearchParams();

        if (filters.catagoryID) {
            queryParams.append('catagoryID', filters.catagoryID);
        }
        if (filters.availablityStatus) {
            queryParams.append('availablityStatus', filters.availablityStatus);
        }
        if (filters.distance) {
            queryParams.append('distance', filters.distance);
        }

        const url = queryParams.toString() ? `${getBookmarkedCompanies}?${queryParams.toString()}` : getBookmarkedCompanies;

        setIsBookmarkedLoading(true);
        $.ajax({
            url: url,
            method: 'GET',
            success: (response) => {
                console.log('BookmarkSuppliers:', response);
                setBookmarkSuppliers(response.bookmarkedCompanies);
                setBookmarkSuppliersCount(response.bookmarkedCompaniesCount);
            },
            error: (xhr, status, error) => {
                console.error('Error loading BookmarkSuppliers:', error);
            },
            complete: () => {
                setIsBookmarkedLoading(false);
            }
        });
    };

    const fetchApprovedCompanies = (filters = {}) => {
        const queryParams = new URLSearchParams();

        if (filters.catagoryID) {
            queryParams.append('catagoryID', filters.catagoryID);
        }
        if (filters.availablityStatus) {
            queryParams.append('availablityStatus', filters.availablityStatus);
        }
        if (filters.distance) {
            queryParams.append('distance', filters.distance);
        }

        const url = queryParams.toString() ? `${getApprovedSuppliers}?${queryParams.toString()}` : getApprovedSuppliers;

        setIsApprovedLoading(true);
        $.ajax({
            url: url,
            method: 'GET',
            success: (response) => {
                console.log('ApprovedSuppliers:', response);
                setApprovedSuppliers(response.approvedCompanies);
                setApprovedSuppliersCount(response.approvedCompaniesCount);
            },
            error: (xhr, status, error) => {
                console.error('Error loading ApprovedSuppliers:', error);
            },
            complete: () => {
                setIsApprovedLoading(false);
            }
        });
    };

    const handleBookmarkedFilterChange = (filterName, value) => {
        setBookmarkedFilters(prev => ({
            ...prev,
            [filterName]: value
        }));
    };

    const handleApprovedFilterChange = (filterName, value) => {
        setApprovedFilters(prev => ({
            ...prev,
            [filterName]: value
        }));
    };

    const onClickMove = (company, targetFolder) => {
        let moveUrl = '';

        switch (targetFolder) {
            case 'BOOKMARKED':
                moveUrl = company.moveToBookmarked;
                break;
            case 'APPROVED':
                moveUrl = company.moveToApproved;
                break;
            case 'SELECTED':
                moveUrl = company.moveToSelected;
                break;
            case 'GROUP':
                setGroupTransferDetails(company.customBookMarkFolder || []);
                setIsMoveGroupModalOpen(true);
                return;
            default:
                console.error('Invalid target Group:', targetFolder);
                return;
        }

        if (moveUrl) {
            $.ajax({
                url: moveUrl,
                method: 'GET',
                success: (response) => {
                    console.log(`Company moved to ${targetFolder} successfully:`, response);
                    toast.success(`Company moved to ${targetFolder.toLowerCase()} successfully!`, {
                        position: "top-right",
                        autoClose: 3000,
                        hideProgressBar: false,
                        closeOnClick: true,
                        pauseOnHover: true,
                        draggable: true,
                    });

                    // Refresh all sections after successful move
                    fetchBookmarkedCompanies(bookmarkedFilters);
                    fetchApprovedCompanies(approvedFilters);
                    fetchCustomFolders();

                    // Re-fetch selected companies
                    $.ajax({
                        url: getSelectedSuppliers,
                        method: 'GET',
                        success: (response) => {
                            setSelectedSuppliers(response.selectedCompanies);
                            setSelectedSuppliersCount(response.selectedCompaniesCount);
                        }
                    });
                },
                error: (xhr, status, error) => {
                    console.error(`Error moving company to ${targetFolder}:`, error);
                    toast.error(`Failed to move company to ${targetFolder.toLowerCase()}. Please try again.`, {
                        position: "top-right",
                        autoClose: 3000,
                        hideProgressBar: false,
                        closeOnClick: true,
                        pauseOnHover: true,
                        draggable: true,
                    });
                },
            });
        }
    };

    const onMoveToCustomFolder = (selectedFolderIndex) => {
        if (groupTransferDetails && groupTransferDetails[selectedFolderIndex]) {
            const selectedFolder = groupTransferDetails[selectedFolderIndex];
            const moveUrl = selectedFolder.moveUrl;

            if (moveUrl) {
                setIsMoveTransferLoading(true);
                $.ajax({
                    url: moveUrl,
                    method: 'GET',
                    success: (response) => {
                        console.log('Company moved to custom Group successfully:', response);
                        toast.success(`Company moved to custom Group successfully!`, {
                            position: "top-right",
                            autoClose: 3000,
                            hideProgressBar: false,
                            closeOnClick: true,
                            pauseOnHover: true,
                            draggable: true,
                        });

                        // Close the modal
                        setIsMoveGroupModalOpen(false);
                        setIsMoveTransferLoading(false);

                        // Refresh all sections after successful move
                        fetchBookmarkedCompanies(bookmarkedFilters);
                        fetchApprovedCompanies(approvedFilters);
                        fetchCustomFolders();

                        // Re-fetch selected companies
                        $.ajax({
                            url: getSelectedSuppliers,
                            method: 'GET',
                            success: (response) => {
                                setSelectedSuppliers(response.selectedCompanies);
                                setSelectedSuppliersCount(response.selectedCompaniesCount);
                            }
                        });
                    },
                    error: (xhr, status, error) => {
                        console.error('Error moving company to custom Group:', error);
                        toast.error('Failed to move company to custom Group. Please try again.', {
                            position: "top-right",
                            autoClose: 3000,
                            hideProgressBar: false,
                            closeOnClick: true,
                            pauseOnHover: true,
                            draggable: true,
                        });
                        setIsMoveTransferLoading(false);
                    },
                });
            }
        }
    };

    const fetchCustomFolders = async () => {
        try {
            // Add null check for customFolder
            if (!customFolder || !Array.isArray(customFolder) || customFolder.length === 0) {
                setCustomFolderData([]);
                setIsCustomFoldersLoading(false);
                return;
            }

            setIsCustomFoldersLoading(true);
            
            const folderPromises = customFolder.map(url =>
                new Promise((resolve, reject) => {
                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: (response) => resolve(response),
                        error: (xhr, status, error) => reject(error)
                    });
                })
            );

            const folderPromisesWithReplacedUrls = customFolder.map(url => {
                const replacedUrl = url.replace('http://localhost/PVT-PraxMarket-Subout-2025', 'http://127.0.0.1:8000');
                console.log('Replaced URL:', replacedUrl);
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: replacedUrl,
                        method: 'GET',
                        success: (response) => resolve(response),
                        error: (xhr, status, error) => reject(error)
                    });
                });
            });
            const folderData = await Promise.all(folderPromisesWithReplacedUrls);
            setCustomFolderData(folderData);
        } catch (error) {
            console.error('Error fetching custom folders:', error);
        } finally {
            setIsCustomFoldersLoading(false);
        }
    };    // Effect to fetch custom folder data when customFolder URLs change
    useEffect(() => {
        if (customFolder && customFolder.length > 0) {
            setIsCustomFoldersLoading(true);
            fetchCustomFolders();
        } else {
            setIsCustomFoldersLoading(false);
        }
    }, [customFolder]);

    const onCreateFolder = async (folderName) => {
        setIsCreatingFolder(true);

        try {
            const response = await new Promise((resolve, reject) => {
                $.ajax({
                    url: addNewBookmarkFolder,
                    method: 'POST',
                    data: {
                        folderName: folderName,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (response) => {
                        console.log('Group created successfully:', response);
                        resolve(response);
                    },
                    error: (xhr, status, error) => {
                        console.error('Error creating Group:', error);
                        reject(error);
                    }
                });
            });

            toast.success('Group created successfully!', {
                position: "top-right",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });

            // Refresh the custom folders list after creating a new folder
            $.ajax({
                url: getAvailableCustomBookmarkApis,
                method: 'GET',
                success: (response) => {
                    console.log('Refreshed custom folders:', response);
                    setCustomFolder(response);
                },
                error: (xhr, status, error) => {
                    console.error('Error refreshing custom folders:', error);
                }
            });

            setIsCreateFolderModalOpen(false);

        } catch (error) {
            console.error('Error creating Group:', error);
            toast.error('Failed to create Group. Please try again.', {
                position: "top-right",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });
        } finally {
            setIsCreatingFolder(false);
        }
    };

    const onUpdateFolder = async (folderName, folderData) => {
        const folderID = folderData.folderUrl.split('/').pop();

        setIsUpdatingFolder(true);

        try {
            const response = await new Promise((resolve, reject) => {
                $.ajax({
                    url: updateBookmarkFolder,
                    method: 'POST',
                    data: {
                        folderName: folderName,
                        folderID: folderID,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (response) => {
                        console.log('Group updated successfully:', response);
                        resolve(response);
                    },
                    error: (xhr, status, error) => {
                        console.error('Error updating Group:', error);
                        reject(error);
                    }
                });
            });

            toast.success('Group updated successfully!', {
                position: "top-right",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });

            // Refresh the custom folders list after updating a folder
            $.ajax({
                url: getAvailableCustomBookmarkApis,
                method: 'GET',
                success: (response) => {
                    console.log('Refreshed custom folders after update:', response);
                    setCustomFolder(response);
                },
                error: (xhr, status, error) => {
                    console.error('Error refreshing custom folders:', error);
                }
            });

            setIsCreateFolderModalOpen(false);
            setFolderToUpdate(null);
            setModalMode('create');

        } catch (error) {
            console.error('Error updating Group:', error);
            toast.error('Failed to update Group. Please try again.', {
                position: "top-right",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });
        } finally {
            setIsUpdatingFolder(false);
        }
    };

    const handleFolderModalSubmit = (folderName, folderData) => {
        if (modalMode === 'create') {
            onCreateFolder(folderName);
        } else {
            onUpdateFolder(folderName, folderData);
        }
    };

    const onDeleteFolder = async (folderUrl) => {
        // Extract folder ID from URL
        const folderID = folderUrl.split('/').pop();

        setIsDeletingFolder(true);

        try {
            const response = await new Promise((resolve, reject) => {
                $.ajax({
                    url: deleteBookmarkFolder,
                    method: 'POST',
                    data: {
                        folderID: folderID,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (response) => {
                        console.log('Group deleted successfully:', response);
                        resolve(response);
                    },
                    error: (xhr, status, error) => {
                        console.error('Error deleting Group:', error);
                        reject(error);
                    }
                });
            });

            toast.success('Group deleted successfully!', {
                position: "top-right",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });

            // Refresh the custom folders list after deleting a folder
            $.ajax({
                url: getAvailableCustomBookmarkApis,
                method: 'GET',
                success: (response) => {
                    console.log('Refreshed custom Group after delete:', response);
                    setCustomFolder(response);
                },
                error: (xhr, status, error) => {
                    console.error('Error refreshing Group folders:', error);
                }
            });

            // Close the confirmation modal
            setIsDeleteConfirmationModalOpen(false);

        } catch (error) {
            console.error('Error deleting Group:', error);
            toast.error('Failed to delete Group. Please try again.', {
                position: "top-right",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });
        } finally {
            setIsDeletingFolder(false);
        }
    };

    // Skeleton component for custom groups loading
    const CustomGroupSkeleton = () => (
        <div className='w-full mt-5'>
            <div className="relative border bg-white border-gray-300 rounded-lg px-4 pb-4 md:h-[280px]">
                <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                    {/* Skeleton for folder name */}
                    <div className="bg-gray-300 animate-pulse h-8 w-24 md:w-32 rounded-b-lg"></div>
                    {/* Skeleton for count */}
                    <div className="bg-gray-200 animate-pulse h-8 w-8 md:w-12 rounded-b-lg"></div>
                </div>
                
                {/* Skeleton for carousel content */}
                <div className="flex gap-2 md:gap-4 pt-6 overflow-hidden">
                    {/* Desktop: 5 items, Tablet: 2 items, Mobile: 1 item */}
                    {[...Array(5)].map((_, index) => (
                        <div 
                            key={index} 
                            className={`flex-shrink-0 ${
                                index >= 2 ? 'hidden lg:block' : ''
                            } ${
                                index >= 1 ? 'hidden md:block' : ''
                            } w-full md:w-48`}
                        >
                            <div className="bg-gray-200 animate-pulse rounded-lg h-24 md:h-32 mb-2"></div>
                            <div className="bg-gray-200 animate-pulse rounded h-3 md:h-4 mb-1"></div>
                            <div className="bg-gray-200 animate-pulse rounded h-2 md:h-3 w-3/4"></div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );

    // Skeleton component for recommended suppliers
    const RecommendedSkeleton = () => (
        <div className="relative bg-white border border-gray-300 rounded-lg px-4 pb-4 md:h-[260px]">
            <div className="flex sm:mb-0 mb-6">
                <div className="bg-orange-300 animate-pulse h-8 w-40 rounded-b-lg"></div>
            </div>
            <div className="flex gap-2 md:gap-4 pt-6 overflow-hidden">
                {/* Desktop: 5 items, Tablet: 2 items, Mobile: 1 item */}
                {[...Array(5)].map((_, index) => (
                    <div 
                        key={index} 
                        className={`flex-shrink-0 ${
                            index >= 2 ? 'hidden lg:block' : ''
                        } ${
                            index >= 1 ? 'hidden md:block' : ''
                        } w-full md:w-48`}
                    >
                        <div className="bg-gray-200 animate-pulse rounded-lg h-24 md:h-32 mb-2"></div>
                        <div className="bg-gray-200 animate-pulse rounded h-3 md:h-4 mb-1"></div>
                        <div className="bg-gray-200 animate-pulse rounded h-2 md:h-3 w-3/4"></div>
                    </div>
                ))}
            </div>
        </div>
    );

    // Skeleton component for bookmarked suppliers
    const BookmarkedSkeleton = () => (
        <div className={`relative border border-gray-300 rounded-lg px-4 pb-4 gradient-bg md:h-[270px]`}>
            <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                <div className="bg-[#7366FF] animate-pulse h-8 w-32 md:w-40 rounded-b-lg"></div>
                <div className="bg-gray-200 animate-pulse h-8 w-8 md:w-12 rounded-b-lg"></div>
            </div>
            <div className="flex gap-2 md:gap-4 pt-6 overflow-hidden">
                {/* Desktop: 3 columns, Tablet: 2 columns, Mobile: 1 column */}
                {[...Array(3)].map((_, index) => (
                    <div 
                        key={index} 
                        className={`flex flex-col gap-4 ${
                            index >= 2 ? 'hidden lg:flex' : ''
                        } ${
                            index >= 1 ? 'hidden md:flex' : ''
                        } w-full md:w-40 lg:w-48`}
                    >
                            <div key={index} className="w-full">
                                <div className="bg-gray-200 animate-pulse rounded-lg h-20 md:h-24 mb-2"></div>
                                <div className="bg-gray-200 animate-pulse rounded h-2 md:h-3 mb-1"></div>
                                <div className="bg-gray-200 animate-pulse rounded h-2 md:h-3 w-2/3"></div>
                            </div>

                    </div>
                ))}
            </div>
        </div>
    );

    // Skeleton component for approved suppliers
    const ApprovedSkeleton = () => (
        <div className={`relative border bg-white border-gray-300 rounded-lg px-4 pb-4 md:h-[270px]`}>
            <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                <div className="bg-[#22C55E] animate-pulse h-8 w-28 md:w-36 rounded-b-lg"></div>
                <div className="bg-gray-200 animate-pulse h-8 w-8 md:w-12 rounded-b-lg"></div>
            </div>
            <div className="flex gap-2 md:gap-4 pt-6 overflow-hidden">
                {/* Desktop: 3 columns, Tablet: 2 columns, Mobile: 1 column */}
                {[...Array(3)].map((_, index) => (
                    <div 
                        key={index} 
                        className={`flex flex-col gap-4 ${
                            index >= 2 ? 'hidden lg:flex' : ''
                        } ${
                            index >= 1 ? 'hidden md:flex' : ''
                        } w-full md:w-40 lg:w-48`}
                    >
                            <div key={index} className="w-full">
                                <div className="bg-gray-200 animate-pulse rounded-lg h-20 md:h-24 mb-2"></div>
                                <div className="bg-gray-200 animate-pulse rounded h-2 md:h-3 mb-1"></div>
                                <div className="bg-gray-200 animate-pulse rounded h-2 md:h-3 w-2/3"></div>
                            </div>
                    </div>
                ))}
            </div>
        </div>
    );

    // Skeleton component for selected suppliers
    const SelectedSkeleton = () => (
        <div className="group/main relative border bg-white border-gray-300 rounded-lg px-4 pb-4 md:h-[271px]">
            <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                <div className="bg-[#3B82F6] animate-pulse h-8 w-28 md:w-36 rounded-b-lg"></div>
                <div className="bg-gray-200 animate-pulse h-8 w-8 md:w-12 rounded-b-lg"></div>
            </div>
            <div className="flex gap-2 md:gap-4 pt-6 overflow-hidden">
                {/* Desktop: 5 items, Tablet: 2 items, Mobile: 1 item */}
                {[...Array(5)].map((_, index) => (
                    <div 
                        key={index} 
                        className={`flex-shrink-0 ${
                            index >= 2 ? 'hidden lg:block' : ''
                        } ${
                            index >= 1 ? 'hidden md:block' : ''
                        } w-full md:w-48`}
                    >
                        <div className="bg-gray-200 animate-pulse rounded-lg h-24 md:h-32 mb-2"></div>
                        <div className="bg-gray-200 animate-pulse rounded h-3 md:h-4 mb-1"></div>
                        <div className="bg-gray-200 animate-pulse rounded h-2 md:h-3 w-3/4"></div>
                    </div>
                ))}
            </div>
        </div>
    );

    // Skeleton component for bookmark ads
    const AdsSkeleton = () => (
        <div className="relative w-full h-full rounded-2xl overflow-hidden bg-gray-100">
            <div 
                className="bg-gray-200 animate-pulse rounded-2xl w-full h-full object-cover" 
                style={{ maxHeight: '250px', minHeight: '200px' }}
            />
            {/* Optional shimmer effect overlay */}
            <div className="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent animate-pulse rounded-2xl"></div>
        </div>
    );


    return (
        <>
            <div className="md:px-5 px-2 py-5 w-full">
                <div className="grid grid-cols-12 gap-4">
                    <div className="md:col-span-9 col-span-12">
                        {isRecommendedLoading ? (
                            <RecommendedSkeleton />
                        ) : (
                            <div className="relative bg-white border border-gray-300 rounded-lg px-4 pb-4 md:h-[260px]">
                                <div className="flex sm:mb-0 mb-6">
                                    <span className="bg-orange-500 text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                        Recommended Suppliers
                                    </span>
                                </div>
                                {recommendedSuppliers.length === 0 ? (
                                    <EmptyItemsMessage />
                                ) : (
                                    <Carousel
                                        responsive={responsive}
                                        arrows={false}
                                        customButtonGroup={<CustomButtonGroupAsArrows />}
                                        infinite
                                        autoPlaySpeed={3000}
                                        keyBoardControl
                                        customTransition="transform 700ms ease-in-out"
                                        transitionDuration={500}
                                        containerClass="relative pt-10 -mt-4"
                                        removeArrowOnDeviceType={[]}
                                        showDots={false}
                                        itemClass="px-2"
                                        swipeable
                                    >
                                        {(recommendedSuppliers || []).map((supplier) => (
                                            <CompanyCard
                                                key={supplier.id}
                                                {...supplier}
                                                recommended
                                                moveToBookmarked={supplier.moveToBookmarked}
                                                moveToApproved={supplier.moveToApproved}
                                                moveToSelected={supplier.moveToSelected}
                                                onClickMove={(targetFolder) => onClickMove(supplier, targetFolder)}
                                            />
                                        ))}
                                    </Carousel>
                                )}
                            </div>
                        )}
                    </div>

                    <div className="md:col-span-3 col-span-12">
                        {isAdsLoading ? (
                            <AdsSkeleton />
                        ) : (
                            <div className="relative w-full h-full rounded-2xl overflow-hidden bg-gray-100">
                                <img
                                    src={bookmarkAds.adAssetUrl ? bookmarkAds.adAssetUrl : "/images/ad.avif"}
                                    alt="Pine Forest"
                                    className="object-cover w-full h-full rounded-2xl cursor-pointer"
                                    style={{ maxHeight: '250px' }}
                                    onClick={() => {
                                        const url = bookmarkAds?.adPointingUrl?.startsWith('http')
                                            ? bookmarkAds.adPointingUrl
                                            : `https://${bookmarkAds.adPointingUrl}`;
                                        window.open(url, '_blank');
                                    }}
                                />
                            </div>
                        )}
                    </div>
                </div>
                <div className="mt-8 text-center">
                    <img
                        src="/images/logo.webp"
                        alt="Prax Engineering Ltd"
                        className="mx-auto w-[239px] h-[64px]"
                    />
                </div>

                <div className='grid grid-cols-12 gap-4 mt-8'>
                    <div className='col-span-12 lg:col-span-6'>
                        <div className="flex flex-wrap gap-4 items-center justify-start mb-6 animate-fadeInDown">
                            {/* Category Filter */}
                            <CustomDropdown
                                icon={TbTriangleSquareCircle}
                                placeholder="Category"
                                value={bookmarkedFilters.catagoryID}
                                options={categoryOptions}
                                onChange={(value) => handleBookmarkedFilterChange('catagoryID', value)}
                                className="hover:scale-105 transition-all duration-200 z-[9999]"
                            />

                            {/* Distance Filter */}
                            <CustomDropdown
                                icon={HiOutlineLocationMarker}
                                placeholder="Distance"
                                value={bookmarkedFilters.distance}
                                options={distanceOptions}
                                onChange={(value) => handleBookmarkedFilterChange('distance', value)}
                                className="hover:scale-105 transition-all duration-200 z-[9998]"
                            />

                            {/* Availability Filter */}
                            <CustomDropdown
                                icon={FaRegCalendarCheck}
                                placeholder="Availability"
                                value={bookmarkedFilters.availablityStatus}
                                options={availabilityOptions}
                                onChange={(value) => handleBookmarkedFilterChange('availablityStatus', value)}
                                className="hover:scale-105 transition-all duration-200 z-[9997]"
                            />
                        </div>
                        {isBookmarkedLoading ? (
                            <BookmarkedSkeleton />
                        ) : (
                            <div className={`relative border border-gray-300 rounded-lg px-4 pb-4 gradient-bg md:h-[500px]`}>
                                <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                                    <span className="bg-[#7366FF] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                        Bookmarked Suppliers
                                    </span>
                                    <div className='bg-[#f4f4ff] px-3 flex items-center justify-center border-b border-x border-[#7366FF] rounded-b-lg text-[#7366FF] font-bold text-sm'>{formatCountWithLeadingZero(bookmarkSuppliersCount || 0)}</div>
                                </div>
                                {bookmarkgrouped.length === 0 ? (
                                    <EmptyItemsMessage />
                                ) : (
                                    <Carousel
                                        responsive={responsive2}
                                        arrows={false}
                                        customButtonGroup={<CustomButtonGroupAsArrows />}
                                        // infinite
                                        autoPlaySpeed={3000}
                                        keyBoardControl
                                        customTransition="transform 700ms ease-in-out"
                                        transitionDuration={500}
                                        containerClass="relative pt-10 -mt-4"
                                        removeArrowOnDeviceType={[]}
                                        showDots={false}
                                        itemClass="px-2"
                                        swipeable
                                    >
                                        {bookmarkgrouped.map((pair, index) => (
                                            <div key={index} className="flex flex-col gap-4">
                                                {pair.map((bookmark) => (
                                                    <CompanyCard
                                                        key={bookmark.id}
                                                        {...bookmark}
                                                        moveToApproved={bookmark.moveToApproved}
                                                        moveToSelected={bookmark.moveToSelected}
                                                        onClickMove={(targetFolder) => onClickMove(bookmark, targetFolder)}
                                                        onDelete={() => {
                                                            setOnDeleteCompany(bookmark);
                                                            setIsDeleteCompanyConfirmationModalOpen(true)
                                                        }}
                                                    />
                                                ))}
                                            </div>
                                        ))}
                                    </Carousel>
                                )}
                            </div>
                        )}
                    </div>
                    <div className='col-span-12 lg:col-span-6'>
                        <div className="flex flex-wrap gap-4 items-center justify-end mb-6 animate-fadeInDown animation-delay-100">
                            {/* Category Filter */}
                            <CustomDropdown
                                icon={TbTriangleSquareCircle}
                                placeholder="Category"
                                value={approvedFilters.catagoryID}
                                options={categoryOptions}
                                onChange={(value) => handleApprovedFilterChange('catagoryID', value)}
                                className="hover:scale-105 transition-all duration-200 z-[9999]"
                            />

                            {/* Distance Filter */}
                            <CustomDropdown
                                icon={HiOutlineLocationMarker}
                                placeholder="Distance"
                                value={approvedFilters.distance}
                                options={distanceOptions}
                                onChange={(value) => handleApprovedFilterChange('distance', value)}
                                className="hover:scale-105 transition-all duration-200 z-[9998]"
                            />

                            {/* Availability Filter */}
                            <CustomDropdown
                                icon={FaRegCalendarCheck}
                                placeholder="Availability"
                                value={approvedFilters.availablityStatus}
                                options={availabilityOptions}
                                onChange={(value) => handleApprovedFilterChange('availablityStatus', value)}
                                className="hover:scale-105 transition-all duration-200 z-[9997]"
                            />
                        </div>
                        {isApprovedLoading ? (
                            <ApprovedSkeleton />
                        ) : (
                            <div className={`relative border bg-white border-gray-300 rounded-lg px-4 pb-4 md:h-[500px]`}>
                                <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                                    <span className="bg-[#22C55E] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                        Approved Suppliers
                                    </span>
                                    <div className='bg-[#f1fff6] px-3 flex items-center justify-center border-b border-x border-[#22C55E] rounded-b-lg text-[#22C55E] font-bold text-sm'>{formatCountWithLeadingZero(approvedSuppliersCount || 0)}</div>
                                </div>
                                {approvedgrouped.length === 0 ? (
                                    <EmptyItemsMessage />
                                ) : (
                                    <Carousel
                                        responsive={responsive2}
                                        arrows={false}
                                        customButtonGroup={<CustomButtonGroupAsArrows />}
                                        // infinite
                                        autoPlaySpeed={3000}
                                        keyBoardControl
                                        customTransition="transform 700ms ease-in-out"
                                        transitionDuration={500}
                                        containerClass="relative pt-10 -mt-4"
                                        removeArrowOnDeviceType={[]}
                                        showDots={false}
                                        itemClass="px-2"
                                        swipeable
                                    >
                                        {approvedgrouped.map((pair, index) => (
                                            <div key={index} className="flex flex-col gap-4">
                                                {pair.map((bookmark) => (
                                                    <CompanyCard
                                                        key={bookmark.id}
                                                        {...bookmark}
                                                        moveToBookmarked={bookmark.moveToBookmarked}
                                                        moveToSelected={bookmark.moveToSelected}
                                                        onClickMove={(targetFolder) => onClickMove(bookmark, targetFolder)}
                                                        onDelete={() => {
                                                            setOnDeleteCompany(bookmark);
                                                            setIsDeleteCompanyConfirmationModalOpen(true)
                                                        }}
                                                    />
                                                ))}
                                            </div>
                                        ))}
                                    </Carousel>
                                )}
                            </div>
                        )}
                    </div>
                </div>

                <div className='w-full mt-5'>
                    {isSelectedLoading ? (
                        <SelectedSkeleton />
                    ) : (
                        <div className="group/main relative border bg-white border-gray-300 rounded-lg px-4 pb-4 md:h-[271px]">
                            <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                                <span className="bg-[#3B82F6] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg">
                                    Selected Suppliers
                                </span>
                                <div className='bg-[#eef4ff] px-3 flex items-center justify-center border-b border-x border-[#3B82F6] rounded-b-lg text-[#3B82F6] font-bold text-sm'>{formatCountWithLeadingZero(selectedSuppliersCount || 0)}</div>
                            </div>
                            {(selectedSuppliers || []).length === 0 ? (
                                <EmptyItemsMessage />
                            ) : (
                                <Carousel
                                    responsive={responsive}
                                    arrows={false}
                                    customButtonGroup={<CustomButtonGroupAsArrows />}
                                    infinite
                                    autoPlaySpeed={3000}
                                    keyBoardControl
                                    customTransition="transform 700ms ease-in-out"
                                    transitionDuration={500}
                                    containerClass="relative pt-10 -mt-4"
                                    removeArrowOnDeviceType={[]}
                                    showDots={false}
                                    itemClass="px-2"
                                    swipeable
                                >
                                    {(selectedSuppliers || []).map((bookmark, index) => (
                                        <div key={index} className="flex flex-col gap-4">
                                            <CompanyCard
                                                key={bookmark.id}
                                                {...bookmark}
                                                moveToBookmarked={bookmark.moveToBookmarked}
                                                moveToApproved={bookmark.moveToApproved}
                                                onClickMove={(targetFolder) => onClickMove(bookmark, targetFolder)}
                                                onDelete={() => {
                                                    setOnDeleteCompany(bookmark);
                                                    setIsDeleteCompanyConfirmationModalOpen(true)
                                                }}
                                            />
                                        </div>
                                    ))}
                                </Carousel>
                            )}
                        </div>
                    )}
                </div>

                <div className='w-full flex justify-between items-center mt-5'>
                    <h2 className='md:text-2xl text-xl font-bold'>Custom Groups</h2>
                    <button
                        className="bg-[#5B21B6] text-white px-4 py-2 rounded-lg hover:bg-[#5a21b6da] transition-colors flex items-center gap-2 cursor-pointer"
                        onClick={() => {
                            setModalMode('create');
                            setFolderToUpdate(null);
                            setIsCreateFolderModalOpen(true);
                        }}
                    >
                        <LuPlus className="text-lg" />
                        <p className="!mb-0 text-white">Create Folder</p>
                    </button>
                </div>

                {/* Show skeleton loading for custom groups */}
                {isCustomFoldersLoading ? (
                    <>
                        {[...Array(2)].map((_, index) => (
                            <CustomGroupSkeleton key={index} />
                        ))}
                    </>
                ) : (
                    /* Map the custom folders */
                    (customFolderData || []).map((folder, folderIndex) => {
                        const folderSuppliers = folder?.suppliers || [];
                        const folderUrl = (customFolder && customFolder[folderIndex]) || ''; // Get the corresponding URL with safety check

                        return (
                            <div key={folderIndex} className='w-full mt-5'>
                                <div className="group/main relative border bg-white border-gray-300 rounded-lg px-4 pb-4 md:h-[280px]">
                                    <div className="flex sm:gap-5 gap-3 sm:mb-0 mb-6">
                                        <p className="bg-[#9333EA] text-white text-sm font-semibold px-3 py-1 pb-2 rounded-b-lg truncate max-w-[150px]">
                                            {folder?.folderName || 'Unnamed Folder'}
                                        </p>
                                        <div className='bg-[#f7efff] px-3 h-8 flex items-center justify-center border-b border-x border-[#9333EA] rounded-b-lg text-[#9333EA] font-bold text-sm'>
                                            {formatCountWithLeadingZero(folder?.totalSupplierCount || 0)}
                                        </div>
                                    </div>
                                    <div className={`group-hover/main:flex hidden absolute z-50 sm:top-4 top-10 ${folderSuppliers?.length > 0 ? 'right-32 ':'right-5' } gap-2`}>
                                        <div
                                            className='border-2 border-[#22C55E] bg-[#f7fffa] rounded-lg px-2 py-2 text-[#22C55E] hover:text-[#22C55F] cursor-pointer hover:bg-[#f9fffb] hover:scale-105'
                                            onClick={() => {
                                                setFolderToUpdate({
                                                    folderUrl: folderUrl,
                                                    folderName: folder?.folderName || ''
                                                });
                                                setModalMode('update');
                                                setIsCreateFolderModalOpen(true);
                                            }}
                                        >
                                            <FiEdit className='text-sm' />
                                        </div>
                                        <div
                                            className='border-2 border-red-500 bg-[#fff3f3] rounded-lg px-2 py-2 text-red-500 hover:text-red-600 cursor-pointer hover:bg-[#fff8f8] hover:scale-105'
                                            onClick={() => {
                                                setFolderToDelete(folderUrl);
                                                setIsDeleteConfirmationModalOpen(true);
                                            }}
                                        >
                                            <AiOutlineDelete className='text-sm' />
                                        </div>
                                    </div>
                                    {folderSuppliers.length === 0 ? (
                                        <EmptyItemsMessage />
                                    ) : (
                                        <Carousel
                                            responsive={responsive}
                                            arrows={false}
                                            customButtonGroup={<CustomButtonGroupAsArrows />}
                                            infinite
                                            autoPlaySpeed={3000}
                                            keyBoardControl
                                            customTransition="transform 700ms ease-in-out"
                                            transitionDuration={500}
                                            containerClass="relative pt-10 -mt-8"
                                            removeArrowOnDeviceType={[]}
                                            showDots={false}
                                            itemClass="px-2"
                                            swipeable
                                        >
                                            {(folderSuppliers || []).map((supplier, index) => (
                                                <div key={index} className="flex flex-col gap-4">

                                                    <CompanyCard
                                                        key={supplier.id}
                                                        {...supplier}
                                                        onDelete={() => {
                                                            setOnDeleteCompany(supplier);
                                                            setIsDeleteCompanyConfirmationModalOpen(true)
                                                        }}
                                                    />
                                                </div>
                                            ))}
                                        </Carousel>
                                    )}
                                </div>
                            </div>
                        );
                    })
                )}
            </div>
            <CreateFolderModal
                isOpen={isCreateFolderModalOpen}
                onClose={() => {
                    setIsCreateFolderModalOpen(false);
                    setFolderToUpdate(null);
                    setModalMode('create');
                }}
                onSubmit={handleFolderModalSubmit}
                isLoading={modalMode === 'create' ? isCreatingFolder : isUpdatingFolder}
                mode={modalMode}
                initialFolderName={folderToUpdate?.folderName || ''}
                folderData={folderToUpdate}
            />
            <MoveGroupModal
                isOpen={isMoveGroupModalOpen}
                groupTransferDetails={groupTransferDetails}
                onClose={() => setIsMoveGroupModalOpen(false)}
                onSubmit={onMoveToCustomFolder}
                isLoading={isMoveTransferLoading}
            />
            <DeleteConfirmationModal
                isOpen={isDeleteConfirmationModalOpen}
                onClose={() => {
                    setIsDeleteConfirmationModalOpen(false);
                    setFolderToDelete(null);
                }}
                onConfirm={() => folderToDelete && onDeleteFolder(folderToDelete)}
                subtitle="You're about to delete this Group. Are you sure you want to delete?"
                isLoading={isDeletingFolder}
            />
            <DeleteConfirmationModal
                isOpen={isDeleteCompanyConfirmationModalOpen}
                onClose={() => { setIsDeleteCompanyConfirmationModalOpen(false) }}
                onConfirm={onClickDeleteCompany}
                subtitle="This company will also be removed from all customised Group."
                isLoading={isDeleting}
            />
            <ToastContainer />
        </>
    );
};

export default Bookmark;
