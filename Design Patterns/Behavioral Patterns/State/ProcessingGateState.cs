using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace State
{
    class ProcessingGateState : IGateState
    {
        Gate gate;
        public ProcessingGateState(Gate gate)
        {
            this.gate = gate;
        }
        public void enter()
        {
            Console.WriteLine("You cannot enter while its processing");
            this.gate.ChangeState(this);
        }

        public void pay()
        {
            Console.WriteLine("Your fare is already being processed. please refraim yourself from any activity until it is finished!");
            this.gate.ChangeState(this);
        }

        public void payfailed()
        {
            Console.WriteLine("Payment has failed!");
            this.gate.ChangeState(new ClosedGateState(this.gate));
        }

        public void payok()
        {
            Console.WriteLine("Your payment has been processed! you may enter.");
            this.gate.ChangeState(new OpenGateState(this.gate));
        }
    }
}
