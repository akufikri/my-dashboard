export default function Login() {
    return (
        <>
            <div className="flex items-center justify-center w-full h-screen bg-[#1f2226]">
                <div className="card max-w-sm w-full h-auto">
                    <div className="card-body">
                        <form>
                            <div className="mb-3">
                                <label
                                    htmlFor="email"
                                    className="label font-bold text-[#f5f171]"
                                >
                                    Email
                                </label>
                                <input
                                    type="email"
                                    placeholder="Jhon@example.com"
                                    class="input input-bordered w-full"
                                />
                            </div>
                            <div className="mb-4">
                                <label
                                    htmlFor="password"
                                    className="label font-bold text-[#f5f171]"
                                >
                                    Password
                                </label>
                                <input
                                    type="password"
                                    placeholder="******"
                                    class="input input-bordered w-full"
                                />
                            </div>
                            <div>
                                <button className="btn w-full text-lg bg-[#f5f171] border-0 hover:bg-[#f5f171] text-[#1f2226]">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </>
    );
}
