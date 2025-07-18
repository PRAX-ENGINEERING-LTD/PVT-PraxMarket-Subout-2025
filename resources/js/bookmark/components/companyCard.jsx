import { MdOutlineLocationOn } from "react-icons/md";
import { RiDeleteBin5Line } from "react-icons/ri";
import { LuArrowLeftRight } from "react-icons/lu";


const CompanyCard = ({ path, name, distanceFromYou, id, onDelete, recommended, moveToBookmarked, moveToApproved, moveToSelected, onClickMove, groupTransferDetails = [] }) => {
    return (
        <div
            className="group border border-gray-200 rounded-xl shadow-sm bg-white transform transition duration-300 hover:-translate-y-1 cursor-pointer"
        >
            <div className="relative h-[132px] w-full overflow-hidden rounded-t-xl">
                <img
                    src={path}
                    alt={name}
                    className="w-full h-full object-cover"
                />
                <div className="group-hover:hidden absolute top-2 left-2 bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow flex items-center gap-1 font-medium">
                    <MdOutlineLocationOn /> {distanceFromYou}
                </div>
                <div className="hidden group-hover:flex absolute top-2 items-center justify-between gap-1 font-medium px-3 w-full">
                    {!recommended ? (
                        <div className='flex bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow items-center' onClick={onDelete}>
                            <RiDeleteBin5Line className='text-base' />
                        </div>
                    ) : (
                        <div></div>
                    )}
                    {onClickMove && (
                        <div className='relative group/sub flex bg-white/80 text-gray-800 text-xs px-2 py-1 rounded shadow items-center cursor-pointer'>
                            <LuArrowLeftRight className='text-base' />

                            {/* Dropdown text, initially hidden */}
                            <div className='absolute top-full -left-16 w-max px-2 py-1 bg-gray-100 text-black text-[10px] rounded shadow-lg hidden pointer-events-none group-hover/sub:flex flex-col group-hover:pointer-events-auto transition-opacity duration-200 whitespace-nowrap z-9999'>
                                {moveToBookmarked && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('BOOKMARKED')}>Move To Bookmarked</span>)}
                                {moveToApproved && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('APPROVED')}>Move To Approved</span>)}
                                {moveToSelected && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('SELECTED')}>Move To Selected</span>)}
                                {(Array.isArray(groupTransferDetails) && groupTransferDetails.length > 0) && (<span className='hover:text-purple-600 hover:underline cursor-pointer' onClick={() => onClickMove('GROUP')}>Move To Group</span>)}
                            </div>
                        </div>
                    )}

                </div>
            </div>
            <div className="p-3 font-bold text-base line-clamp-1 truncate">
                {name}
            </div>
            <div className="absolute bottom-8 left-1/2 -translate-x-1/2 mb-2 z-50 px-3 py-1 bg-purple-600 text-white text-base rounded shadow hidden group-hover:block transition-opacity duration-300 whitespace-nowrap pointer-events-none">
                {name}
                {/* Tooltip arrow */}
                <div className="absolute top-7 left-1/2 -translate-x-1/2 w-2 h-2 bg-purple-600 rotate-45"></div>
            </div>
        </div>
    )
}

export default CompanyCard
